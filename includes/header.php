<?php
// Шапка сайта (верстка из alt.html), подготовлена для включения в шаблон
?>
<header class="site-header" role="banner">
  <div class="site-header__inner u-container">
    <!-- ЛОГО -->
    <!-- bx:include:site-logo -->
    <a class="site-header__logo" href="/" aria-label="Автошкола Форсаж — на главную">
      <img
        class="site-header__logo-image js-site-logo"
        src="assets/icons/logo-forsazh.svg"
        data-logo-light="assets/icons/logo-forsazh.svg"
        data-logo-dark="assets/icons/logo-dark.svg"
        alt="Форсаж — автошкола"
        width="120"
        height="28"
        loading="eager"
        decoding="async"
      />
    </a>

    <!-- ОСНОВНАЯ НАВИГАЦИЯ -->
    <nav class="nav" aria-label="Основная навигация">
      <!-- bx:main-menu -->
      <ul class="nav__list" role="list">
        <li class="nav__item">
          <a class="nav__link" href="/prices/">Категории и цены</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="/exams-driving/">Экзамены и вождение</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="/reviews/">Отзывы</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="/payment/">Оплата</a>
        </li>
      </ul>
    </nav>

    <!-- БЛОК ДЕЙСТВИЙ -->
    <div class="site-header__actions">
      <!-- ПОИСК -->
      <button class="action-btn action-btn--search" type="button" aria-label="Открыть поиск" data-action="open-search">
        <span class="action-btn__icon" data-icon="search" aria-hidden="true"></span>
      </button>
      <!-- bx:search-title -->

      <!-- ТЕЛЕФОН -->
      <!-- bx:include:header-phone -->
      <a class="site-header__phone" href="tel:+74732690000" aria-label="Позвонить по номеру +7 473 269-00-00">
        +7&nbsp;473&nbsp;269-00-00
      </a>

      <!-- ПЕРЕКЛЮЧАТЕЛЬ ТЕМЫ -->
      <button
        class="theme-toggle"
        type="button"
        role="switch"
        aria-checked="false"
        aria-label="Переключить тему"
        data-action="toggle-theme"
      >
        <span class="theme-toggle__track">
          <span class="theme-toggle__icon theme-toggle__icon--sun" data-icon="sun" aria-hidden="true"></span>
          <span class="theme-toggle__icon theme-toggle__icon--moon" data-icon="moon" aria-hidden="true"></span>
          <span class="theme-toggle__thumb"></span>
        </span>
        <span class="u-visually-hidden">Тёмная тема</span>
      </button>

      <!-- ГАМБУРГЕР (моб. меню) -->
      <button
        class="header__burger"
        type="button"
        aria-label="Открыть меню"
        aria-controls="site-menu"
        aria-expanded="false"
        data-action="toggle-menu"
      >
        <span class="header__burger-icon" data-icon="menu" aria-hidden="true"></span>
      </button>
    </div>
  </div>
  <div id="site-menu" class="site-menu" data-state="closed" hidden>
    <div class="site-menu__panel" role="dialog" aria-modal="true" aria-labelledby="site-menu-title" tabindex="-1">
      <div class="site-menu__header">
        <p id="site-menu-title" class="site-menu__title">Навигация</p>
        <button class="site-menu__close" type="button" aria-label="Закрыть меню" data-action="close-menu"></button>
      </div>
      <nav class="menu-nav" aria-label="Быстрые ссылки">
        <ul class="menu-nav__list" role="list">
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="index.php">Главная</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="price.php">Категории и цены</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="about.php">О нас</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="fast_courses.php">Ускоренные курсы вождения</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="specsignal.php">Спецсигналы</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="news.php">Новости</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="news_element.php">Новость: Дополнительная скидка 13%</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="faq.php">Вопросы и ответы</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="gallery.php">Фотогалерея</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="search.php">Поиск</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="contacts.php">Контакты</a>
          </li>
          <li class="menu-nav__item">
            <a class="menu-nav__link" href="404.php">Страница 404</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
