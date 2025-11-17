<?php
// Шапка сайта (верстка из alt.html), подготовлена для включения в шаблон
?>
<header class="site-header" role="banner">
  <div class="site-header__inner u-container">
    <!-- ЛОГО -->
    <!-- bx:include:site-logo -->
    <a class="site-header__logo" href="/" aria-label="Автошкола Форсаж — на главную">
      <img class="site-header__logo-image js-site-logo"
           src="assets/icons/logo-forsazh.svg"
           data-logo-light="assets/icons/logo-forsazh.svg"
           data-logo-dark="assets/icons/logo-dark.svg"
           alt="Форсаж — автошкола"
           width="120"
           height="28"
           loading="eager"
           decoding="async">
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
      <button class="action-btn action-btn--search"
              type="button"
              aria-label="Открыть поиск"
              data-action="open-search">
        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" focusable="false">
          <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16a6.471 6.471 0 004.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
        </svg>
      </button>
      <!-- bx:search-title -->

      <!-- ТЕЛЕФОН -->
      <!-- bx:include:header-phone -->
      <a class="site-header__phone" href="tel:+74732690000" aria-label="Позвонить по номеру +7 473 269-00-00">
        +7&nbsp;473&nbsp;269-00-00
      </a>

      <!-- ПЕРЕКЛЮЧАТЕЛЬ ТЕМЫ -->
      <button class="action-btn action-btn--theme"
              type="button"
              role="switch"
              aria-checked="false"
              aria-label="Переключить тему"
              data-action="toggle-theme">
        <span class="u-visually-hidden">Тёмная тема</span>
        <img src="assets/icons/color_theme.svg" alt="" width="64" height="34" loading="eager" decoding="async">
      </button>

      <!-- ГАМБУРГЕР (моб. меню) -->
      <button class="burger"
              type="button"
              aria-label="Открыть меню"
              aria-controls="site-menu"
              aria-expanded="false"
              data-action="toggle-menu">
        <img src="assets/icons/burger.svg" alt="" width="26" height="26" loading="eager" decoding="async">
      </button>
    </div>
  </div>
  <div id="site-menu" class="site-menu" data-state="closed" hidden>
    <div class="site-menu__panel" role="dialog" aria-modal="true" aria-labelledby="site-menu-title" tabindex="-1">
      <div class="site-menu__header">
        <p id="site-menu-title" class="site-menu__title">Навигация</p>
        <button class="site-menu__close"
                type="button"
                aria-label="Закрыть меню"
                data-action="close-menu"></button>
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
