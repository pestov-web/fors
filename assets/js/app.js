// Theme toggle (light/dark) with icon swap
(function () {
  const THEME_KEY = 'theme';
  const root = document.documentElement; // use class on <html>

  function applyTheme(theme) {
    const isDark = theme === 'dark';
    root.classList.toggle('theme-dark', isDark);

    // aria state
    const toggleBtn = document.querySelector('[data-action="toggle-theme"]');
    if (toggleBtn) toggleBtn.setAttribute('aria-checked', String(isDark));

    // swap icons
    const themeImg = document.querySelector('.action-btn--theme img');
    if (themeImg) {
      themeImg.src = isDark ? 'assets/icons/color_theme_dark.svg' : 'assets/icons/color_theme.svg';
    }
    const burgerImg = document.querySelector('.burger img');
    if (burgerImg) {
      burgerImg.src = isDark ? 'assets/icons/burger_dark.svg' : 'assets/icons/burger.svg';
    }
    document.querySelectorAll('.js-site-logo').forEach((logo) => {
      const darkSrc = logo.getAttribute('data-logo-dark');
      const lightSrc = logo.getAttribute('data-logo-light');
      if (!darkSrc || !lightSrc) return;
      logo.setAttribute('src', isDark ? darkSrc : lightSrc);
    });
    updateThemeAwareAssets(isDark);
  }

  function getPreferredTheme() {
    const saved = localStorage.getItem(THEME_KEY);
    if (saved === 'dark' || saved === 'light') return saved;
    return 'light';
  }

  document.addEventListener('DOMContentLoaded', () => {
    // init
    applyTheme(getPreferredTheme());

    // bind
    const toggle = document.querySelector('[data-action="toggle-theme"]');
    if (toggle) {
      toggle.addEventListener('click', () => {
        const isDark = root.classList.contains('theme-dark');
        const next = isDark ? 'light' : 'dark';
        localStorage.setItem(THEME_KEY, next);
        applyTheme(next);
      });
    }

    initSiteMenu();
    initPriceTabs();
    initCategorySliders();
  });

  function initSiteMenu() {
    const menu = document.querySelector('#site-menu');
    if (!menu) return;

    const panel = menu.querySelector('.site-menu__panel');
    if (!panel) return;

    const openers = document.querySelectorAll('[data-action="toggle-menu"]');
    const closers = menu.querySelectorAll('[data-action="close-menu"]');
    const focusableSelector =
      'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])';
    let previousFocus = null;
    let closingFallback = null;
    let pendingTransitionHandler = null;
    let openAnimationFrame = null;

    openers.forEach((button) => {
      button.setAttribute('aria-expanded', 'false');
      button.addEventListener('click', () => {
        if (menu.dataset.state === 'open') {
          closeMenu();
        } else {
          openMenu(button);
        }
      });
    });

    closers.forEach((button) => {
      button.addEventListener('click', closeMenu);
    });

    menu.addEventListener('click', (event) => {
      if (event.target === menu) {
        closeMenu();
      }
    });

    function openMenu(trigger) {
      if (menu.dataset.state === 'open' || menu.dataset.state === 'opening') return;
      if (menu.dataset.state === 'closing') {
        finalizeClose({ restoreFocus: false });
      }
      if (openAnimationFrame) {
        window.cancelAnimationFrame(openAnimationFrame);
        openAnimationFrame = null;
      }

      menu.dataset.state = 'opening';
      previousFocus = trigger instanceof HTMLElement ? trigger : document.activeElement;
      menu.hidden = false;
      document.body.classList.add('is-menu-open');
      openers.forEach((btn) => btn.setAttribute('aria-expanded', 'true'));
      openAnimationFrame = window.requestAnimationFrame(() => {
        menu.classList.add('site-menu--visible');
        menu.dataset.state = 'open';
        openAnimationFrame = null;
      });
      document.addEventListener('keydown', handleKeydown);
      menu.addEventListener('keydown', trapFocus);
      const focusable = getFocusable();
      const focusTarget = focusable[0] || panel;
      focusTarget?.focus({ preventScroll: true });
    }

    function closeMenu() {
      if (menu.dataset.state !== 'open' && menu.dataset.state !== 'opening') return;
      if (openAnimationFrame) {
        window.cancelAnimationFrame(openAnimationFrame);
        openAnimationFrame = null;
      }
      menu.dataset.state = 'closing';
      menu.classList.remove('site-menu--visible');
      document.body.classList.remove('is-menu-open');
      openers.forEach((btn) => btn.setAttribute('aria-expanded', 'false'));

      if (pendingTransitionHandler) {
        menu.removeEventListener('transitionend', pendingTransitionHandler);
        pendingTransitionHandler = null;
      }

      const handleTransitionEnd = (event) => {
        if (event.target !== menu) return;
        finalizeClose();
      };

      pendingTransitionHandler = handleTransitionEnd;
      menu.addEventListener('transitionend', handleTransitionEnd, { once: true });
      closingFallback = window.setTimeout(() => finalizeClose(), 450);
    }

    function finalizeClose({ restoreFocus = true } = {}) {
      if (menu.dataset.state === 'closed') return;
      menu.hidden = true;
      menu.dataset.state = 'closed';
      document.removeEventListener('keydown', handleKeydown);
      menu.removeEventListener('keydown', trapFocus);
      if (restoreFocus && previousFocus instanceof HTMLElement) {
        previousFocus.focus({ preventScroll: true });
      }
      previousFocus = null;

      if (closingFallback) {
        window.clearTimeout(closingFallback);
        closingFallback = null;
      }

      if (pendingTransitionHandler) {
        menu.removeEventListener('transitionend', pendingTransitionHandler);
        pendingTransitionHandler = null;
      }

      if (openAnimationFrame) {
        window.cancelAnimationFrame(openAnimationFrame);
        openAnimationFrame = null;
      }
    }

    function handleKeydown(event) {
      if (event.key === 'Escape') {
        event.preventDefault();
        closeMenu();
      }
    }

    function trapFocus(event) {
      if (event.key !== 'Tab') return;
      const focusable = getFocusable();
      if (focusable.length === 0) {
        event.preventDefault();
        panel.focus({ preventScroll: true });
        return;
      }

      const first = focusable[0];
      const last = focusable[focusable.length - 1];
      const active = document.activeElement;

      if (event.shiftKey && active === first) {
        event.preventDefault();
        last.focus({ preventScroll: true });
      } else if (!event.shiftKey && active === last) {
        event.preventDefault();
        first.focus({ preventScroll: true });
      }
    }

    function getFocusable() {
      return Array.from(menu.querySelectorAll(focusableSelector)).filter((element) => {
        if (!(element instanceof HTMLElement)) return false;
        if (element.hasAttribute('disabled') || element.getAttribute('aria-hidden') === 'true') return false;
        const rect = element.getBoundingClientRect();
        return rect.width > 0 && rect.height > 0;
      });
    }
  }

  function initPriceTabs() {
    const groups = document.querySelectorAll('.js-price-tabs');
    groups.forEach((group) => {
      const triggers = Array.from(group.querySelectorAll('.js-price-tab'));
      const panels = Array.from(group.querySelectorAll('.js-price-panel'));
      if (triggers.length === 0 || panels.length === 0) return;

      const panelMap = new Map();
      panels.forEach((panel) => {
        if (panel.id) {
          panelMap.set(panel.id, panel);
        }
      });

      let activeId =
        triggers.find((btn) => btn.getAttribute('aria-selected') === 'true')?.dataset.priceTab ||
        panels[0]?.id ||
        triggers[0]?.dataset.priceTab;

      function setActive(nextId, { focus = false } = {}) {
        if (!nextId) return;
        const trigger = triggers.find((btn) => btn.dataset.priceTab === nextId);
        const panel = panelMap.get(nextId) || panels.find((node) => node.id === nextId);
        if (!trigger || !panel) return;

        triggers.forEach((btn) => {
          const isCurrent = btn === trigger;
          btn.classList.toggle('price-tabs__trigger--active', isCurrent);
          btn.setAttribute('aria-selected', String(isCurrent));
          btn.setAttribute('tabindex', isCurrent ? '0' : '-1');
        });

        panels.forEach((node) => {
          const isCurrent = node === panel;
          if (isCurrent) {
            node.removeAttribute('hidden');
            node.setAttribute('tabindex', '0');
          } else {
            if (!node.hasAttribute('hidden')) {
              node.setAttribute('hidden', '');
            }
            node.removeAttribute('tabindex');
          }
        });

        activeId = nextId;
        if (focus) {
          trigger.focus({ preventScroll: true });
        }
      }

      setActive(activeId);

      function handleKeydown(event, current) {
        const { key } = event;
        if (
          !['ArrowRight', 'ArrowLeft', 'ArrowUp', 'ArrowDown', 'Home', 'End', 'Enter', ' ', 'Spacebar'].includes(key)
        ) {
          return;
        }
        event.preventDefault();
        if (key === 'Enter' || key === ' ' || key === 'Spacebar') {
          setActive(current.dataset.priceTab);
          return;
        }

        let nextIndex;
        const currentIndex = triggers.indexOf(current);
        if (key === 'Home') {
          nextIndex = 0;
        } else if (key === 'End') {
          nextIndex = triggers.length - 1;
        } else if (key === 'ArrowRight' || key === 'ArrowDown') {
          nextIndex = (currentIndex + 1) % triggers.length;
        } else if (key === 'ArrowLeft' || key === 'ArrowUp') {
          nextIndex = (currentIndex - 1 + triggers.length) % triggers.length;
        }

        const nextTrigger = triggers[nextIndex];
        if (nextTrigger) {
          setActive(nextTrigger.dataset.priceTab, { focus: true });
        }
      }

      triggers.forEach((trigger) => {
        trigger.addEventListener('click', () => setActive(trigger.dataset.priceTab, { focus: true }));
        trigger.addEventListener('keydown', (event) => handleKeydown(event, trigger));
      });
    });
  }

  function initCategorySliders() {
    const sliders = document.querySelectorAll('.js-categories-slider');
    sliders.forEach(setupSlider);
  }

  function setupSlider(slider) {
    const viewport = slider.querySelector('.categories__viewport');
    const track = slider.querySelector('.categories__list');
    const items = Array.from(track?.children || []);
    if (!viewport || !track || items.length === 0) return;

    const prevBtn = slider.querySelector('[data-role="prev"]');
    const nextBtn = slider.querySelector('[data-role="next"]');
    const currentEl = slider.querySelector('[data-role="current"]');
    const totalEl = slider.querySelector('[data-role="total"]');
    const progressLine = slider.querySelector('.categories__progress-line');
    const statusEl = slider.querySelector('.categories__status');

    let pageIndex = 0;
    let perView = getPerView();
    let totalPages = Math.max(1, Math.ceil(items.length / perView));

    refreshMetrics({ animate: false });

    if (prevBtn) {
      prevBtn.addEventListener('click', () => goTo(pageIndex - 1));
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', () => goTo(pageIndex + 1));
    }

    let pointerActive = false;
    let pointerStartX = 0;

    viewport.addEventListener('pointerdown', (event) => {
      pointerActive = true;
      pointerStartX = event.clientX;
      viewport.setPointerCapture?.(event.pointerId);
    });

    viewport.addEventListener('pointerup', (event) => {
      if (!pointerActive) return;
      viewport.releasePointerCapture?.(event.pointerId);
      const delta = event.clientX - pointerStartX;
      pointerActive = false;
      const threshold = 40;
      if (Math.abs(delta) > threshold) {
        if (delta < 0) {
          goTo(pageIndex + 1);
        } else {
          goTo(pageIndex - 1);
        }
      }
    });

    viewport.addEventListener('pointercancel', () => {
      pointerActive = false;
    });

    viewport.addEventListener('pointerleave', () => {
      pointerActive = false;
    });

    const resizeObserver = window.ResizeObserver
      ? new ResizeObserver(() => refreshMetrics({ animate: false }))
      : null;
    if (resizeObserver) resizeObserver.observe(viewport);
    window.addEventListener('resize', () => refreshMetrics({ animate: false }));

    function getPerView() {
      const raw = parseFloat(getComputedStyle(slider).getPropertyValue('--categories-per-view'));
      if (!Number.isNaN(raw) && raw > 0) return Math.round(raw);
      return 1;
    }

    function getGap() {
      const styles = getComputedStyle(track);
      const gap = parseFloat(styles.columnGap || styles.gap || '0');
      return Number.isNaN(gap) ? 0 : gap;
    }

    function computeOffset() {
      const itemWidth = items[0]?.offsetWidth || viewport.clientWidth;
      const gap = getGap();
      const rawOffset = pageIndex * (itemWidth * perView + gap * perView);
      const maxOffset = Math.max(0, track.scrollWidth - viewport.clientWidth);
      return Math.min(rawOffset, maxOffset);
    }

    function updateTransform(animate = true) {
      const offset = computeOffset();
      if (!animate) {
        const previousTransition = track.style.transition;
        track.style.transition = 'none';
        track.style.transform = `translate3d(-${offset}px, 0, 0)`;
        // force reflow then restore transition
        requestAnimationFrame(() => {
          track.offsetWidth; // eslint-disable-line no-unused-expressions
          track.style.transition = previousTransition || '';
        });
      } else {
        track.style.transform = `translate3d(-${offset}px, 0, 0)`;
      }
    }

    function refreshMetrics({ animate = true } = {}) {
      perView = getPerView();
      totalPages = Math.max(1, Math.ceil(items.length / perView));
      pageIndex = Math.min(pageIndex, totalPages - 1);
      slider.classList.toggle('categories--single', totalPages <= 1);
      updateTransform(animate);
      updateUI();
    }

    function goTo(targetIndex) {
      const clamped = Math.max(0, Math.min(targetIndex, totalPages - 1));
      if (clamped === pageIndex) return;
      pageIndex = clamped;
      updateTransform(true);
      updateUI();
    }

    function updateUI() {
      if (prevBtn) prevBtn.disabled = pageIndex === 0;
      if (nextBtn) nextBtn.disabled = pageIndex >= totalPages - 1;

      if (currentEl) currentEl.textContent = String(pageIndex + 1);
      if (totalEl) totalEl.textContent = String(totalPages);

      if (progressLine) {
        const percent = totalPages <= 1 ? 100 : ((pageIndex + 1) / totalPages) * 100;
        progressLine.style.width = `${percent}%`;
      }

      if (statusEl) {
        statusEl.textContent = `Показан слайд ${pageIndex + 1} из ${totalPages}`;
      }
    }
  }

  function updateThemeAwareAssets(isDark) {
    const themedNodes = document.querySelectorAll('[data-theme-light][data-theme-dark]');
    themedNodes.forEach((node) => {
      const lightSrc = node.getAttribute('data-theme-light');
      const darkSrc = node.getAttribute('data-theme-dark');
      if (!lightSrc || !darkSrc) return;

      if (node instanceof HTMLImageElement) {
        node.src = isDark ? darkSrc : lightSrc;
      } else if (node instanceof HTMLSourceElement) {
        node.srcset = isDark ? darkSrc : lightSrc;
      }
    });
  }
})();
