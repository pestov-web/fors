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

    // Toggle switch теперь работает через CSS и aria-checked - смена состояния автоматическая

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
    initDistrictTabs();
    initRouteButtons();
    initSplideSliders();
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

  function initDistrictTabs() {
    const groups = document.querySelectorAll('.js-district-tabs');
    groups.forEach((group) => {
      const triggers = Array.from(group.querySelectorAll('[data-district-tab]'));
      const panels = Array.from(group.querySelectorAll('.js-district-panel'));
      const mapFrame = group.querySelector('.js-district-map');
      if (triggers.length === 0 || panels.length === 0) return;

      const panelMap = new Map();
      panels.forEach((panel) => {
        if (panel.id) {
          panelMap.set(panel.id, panel);
        }
      });

      let activeId =
        triggers.find((btn) => btn.getAttribute('aria-selected') === 'true')?.dataset.districtTab ||
        panels[0]?.id ||
        triggers[0]?.dataset.districtTab;

      function setActive(nextId, { focus = false } = {}) {
        if (!nextId) return;
        const trigger = triggers.find((btn) => btn.dataset.districtTab === nextId);
        const panel = panelMap.get(nextId) || panels.find((node) => node.id === nextId);
        if (!trigger || !panel) return;

        triggers.forEach((btn) => {
          const isCurrent = btn === trigger;
          btn.classList.toggle('district-tabs__button_active', isCurrent);
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

        // Обновление карты
        if (mapFrame) {
          const mapKey = 'map-' + nextId.replace('district-', '');
          const mapSrc = mapFrame.getAttribute('data-' + mapKey);
          if (mapSrc) {
            mapFrame.src = mapSrc;
          }
        }

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
          setActive(current.dataset.districtTab);
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
          setActive(nextTrigger.dataset.districtTab, { focus: true });
        }
      }

      triggers.forEach((trigger) => {
        trigger.addEventListener('click', () => setActive(trigger.dataset.districtTab, { focus: true }));
        trigger.addEventListener('keydown', (event) => handleKeydown(event, trigger));
      });
    });
  }

  function initRouteButtons() {
    const buttons = document.querySelectorAll('.js-build-route');
    buttons.forEach((button) => {
      button.addEventListener('click', () => {
        const coords = button.getAttribute('data-coords');
        if (!coords) return;

        // Формат: https://yandex.ru/maps/?rtext=~lat,lon&rtt=auto
        // ~ означает "от моего местоположения"
        const url = `https://yandex.ru/maps/?rtext=~${coords}&rtt=auto`;
        window.open(url, '_blank', 'noopener,noreferrer');
      });
    });
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

  function initSplideSliders() {
    if (typeof Splide === 'undefined') {
      console.warn('Splide library not loaded');
      return;
    }

    // Инициализация слайдера категорий с адаптивными настройками
    const categoriesSlider = document.querySelector('.categories__slider.splide');
    if (categoriesSlider) {
      const splide = new Splide(categoriesSlider, {
        type: 'slide',
        perPage: 3,
        perMove: 1,
        gap: '1.1rem',
        padding: { left: '0.3rem', right: '0.5rem' },
        pagination: false,
        arrows: false,
        updateOnMove: true,
        breakpoints: {
          1199: {
            perPage: 2,
            gap: '1.25rem',
            padding: { left: '0.5rem', right: '0.5rem' },
          },
          599: {
            perPage: 1,
            gap: '1rem',
            padding: { left: '0.1rem', right: '0.1rem' },
          },
        },
      }).mount();

      // Кастомная пагинация
      const progressLine = document.querySelector('.categories__progress-line');
      const currentPage = document.querySelector('.categories__page-current');
      const totalPages = document.querySelector('.categories__page-total');
      const prevBtn = document.querySelector('.categories__nav-btn--prev');
      const nextBtn = document.querySelector('.categories__nav-btn--next');

      if (progressLine && currentPage && totalPages && prevBtn && nextBtn) {
        const updatePagination = () => {
          const index = splide.index;
          const total = splide.length;
          const perPage = splide.options.perPage;
          const pageCount = Math.ceil(total / perPage);
          const currentPageNum = Math.floor(index / perPage) + 1;

          currentPage.textContent = currentPageNum;
          totalPages.textContent = pageCount;

          const progress = ((currentPageNum - 1) / (pageCount - 1)) * 100;
          progressLine.style.width = `${progress}%`;

          prevBtn.disabled = currentPageNum === 1;
          nextBtn.disabled = currentPageNum === pageCount;
        };

        splide.on('moved', updatePagination);
        splide.on('mounted', updatePagination);

        prevBtn.addEventListener('click', () => {
          const perPage = splide.options.perPage;
          const newIndex = Math.max(0, splide.index - perPage);
          splide.go(newIndex);
        });

        nextBtn.addEventListener('click', () => {
          const perPage = splide.options.perPage;
          const newIndex = Math.min(splide.length - 1, splide.index + perPage);
          splide.go(newIndex);
        });
      }
    }

    // Инициализация остальных слайдеров с дефолтными настройками
    const otherSliders = document.querySelectorAll('.splide:not(.categories__slider)');
    otherSliders.forEach((slider) => {
      new Splide(slider).mount();
    });
  }
})();

// FAQ Accordion
(function () {
  document.addEventListener('DOMContentLoaded', () => {
    const accordionItems = document.querySelectorAll('.faq-accordion__item');

    accordionItems.forEach((item) => {
      const button = item.querySelector('.faq-accordion__question');
      const answers = item.querySelector('.faq-accordion__answers');

      if (!button || !answers) return;

      button.addEventListener('click', () => {
        const isExpanded = button.getAttribute('aria-expanded') === 'true';

        // Toggle state
        button.setAttribute('aria-expanded', String(!isExpanded));
        item.setAttribute('data-expanded', String(!isExpanded));

        // Set max-height for smooth animation
        if (!isExpanded) {
          answers.style.maxHeight = answers.scrollHeight + 20 + 'px';
          answers.style.paddingBottom = '20px';
        } else {
          answers.style.maxHeight = '0';
          answers.style.paddingBottom = '0';
        }
      });

      // Initialize first item as open (optional)
      if (item === accordionItems[0]) {
        button.setAttribute('aria-expanded', 'true');
        item.setAttribute('data-expanded', 'true');
        answers.style.maxHeight = answers.scrollHeight + 20 + 'px';
        answers.style.paddingBottom = '20px';
      }
    });
  });
})();
