<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты — Автошкола Форсаж</title>
  <link rel="preload" as="style" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header-inner.php'; ?>

  <main id="main" tabindex="-1">
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
      <div class="breadcrumbs__inner u-container">
        <!-- bx:breadcrumb-path -->
        <ol class="breadcrumbs__list">
          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="/">Главная</a>
            <span class="breadcrumbs__separator" aria-hidden="true"></span>
          </li>
          <li class="breadcrumbs__item" aria-current="page">
            <span class="breadcrumbs__current">Контакты</span>
          </li>
        </ol>
      </div>
    </nav>

    <section class="page-section contacts" aria-labelledby="contacts-title">
      <div class="u-container contacts__container">
        <header class="contacts__header">
          <h1 class="contacts__title" id="contacts-title">Контакты</h1>
        </header>

        <ul class="contacts__grid">
          <li class="contacts-card contacts-card--address">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/office.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">Главный офис:</span>
              <address class="contacts-card__value contacts-card__value--address">
                ул. Плехановская, 35, 2 этаж
              </address>
            </div>
          </li>

          <li class="contacts-card contacts-card--phone">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/phone.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">Телефон:</span>
              <a class="contacts-card__value contacts-card__link" href="tel:+74732690000">
                +7&nbsp;(473)&nbsp;269-00-00
              </a>
            </div>
          </li>

          <li class="contacts-card contacts-card--hours">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/time.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">Рабочее время:</span>
              <ul class="contacts-card__list">
                <li class="contacts-card__list-item">
                  <span class="contacts-card__day">ПН–ЧТ</span>
                  <time datetime="09:00">9:00</time>&nbsp;—&nbsp;<time datetime="20:00">20:00</time>
                </li>
                <li class="contacts-card__list-item">
                  <span class="contacts-card__day">ПТ</span>
                  <time datetime="09:00">9:00</time>&nbsp;—&nbsp;<time datetime="19:00">19:00</time>
                </li>
                <li class="contacts-card__list-item">
                  <span class="contacts-card__day">СБ</span>
                  <time datetime="10:00">10:00</time>&nbsp;—&nbsp;<time datetime="16:00">16:00</time>
                </li>
              </ul>
            </div>
          </li>

          <li class="contacts-card contacts-card--email">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/mail.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">E-mail:</span>
              <a class="contacts-card__value contacts-card__link" href="mailto:fors36@mail.ru">
                fors36@mail.ru
              </a>
            </div>
          </li>

          <li class="contacts-card contacts-card--social">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/social.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">Социальные сети:</span>
              <ul class="contacts-social">
                <li class="contacts-social__item">
                  <a class="contacts-social__link" href="https://www.tiktok.com/" target="_blank" rel="noopener">
                    <span class="u-visually-hidden">TikTok</span>
                    <img
                      class="contacts-social__icon"
                      src="assets/icons/contacts/tiktok-black.svg"
                      data-theme-light="assets/icons/contacts/tiktok-black.svg"
                      data-theme-dark="assets/icons/tiktok.svg"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                      decoding="async"
                    >
                  </a>
                </li>
                <li class="contacts-social__item">
                  <a class="contacts-social__link" href="https://vk.com/" target="_blank" rel="noopener">
                    <span class="u-visually-hidden">VK</span>
                    <img
                      class="contacts-social__icon"
                      src="assets/icons/contacts/vk-black.svg"
                      data-theme-light="assets/icons/contacts/vk-black.svg"
                      data-theme-dark="assets/icons/vk.svg"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                      decoding="async"
                    >
                  </a>
                </li>
                <li class="contacts-social__item">
                  <a class="contacts-social__link" href="https://t.me/" target="_blank" rel="noopener">
                    <span class="u-visually-hidden">Telegram</span>
                    <img
                      class="contacts-social__icon"
                      src="assets/icons/contacts/telegram-black.svg"
                      data-theme-light="assets/icons/contacts/telegram-black.svg"
                      data-theme-dark="assets/icons/telegram.svg"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                      decoding="async"
                    >
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="contacts-card contacts-card--legal">
            <div class="contacts-card__icon" aria-hidden="true">
              <img src="assets/icons/contacts/info.svg" alt="" width="32" height="32" decoding="async">
            </div>
            <div class="contacts-card__body">
              <span class="contacts-card__label">Юридическая информация:</span>
              <ul class="contacts-card__list contacts-card__list--legal">
                <li>ЧОУ ДПО «Форсаж»</li>
                <li>ОГРН 1033600142454</li>
                <li>ИНН 3662083356</li>
                <li>КПП 366201001</li>
                <li>ОКПО 70713664</li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="contacts-map page-section" aria-labelledby="contacts-map-title">
      <div class="u-container contacts-map__container">
        <h2 class="contacts-map__title u-visually-hidden" id="contacts-map-title">Расположение офиса на карте</h2>
        <figure class="contacts-map__figure">
          <!-- bx:map:contacts -->
          <div class="contacts-map__canvas" role="region" aria-label="Интерактивная карта автошколы">
            <picture>
              <img
                class="contacts-map__image"
                src="assets/img/contacts/map.png"
                alt="Схема расположения главного офиса автошколы «Форсаж» на карте города"
                loading="lazy"
                decoding="async"
                width="2638"
                height="1046"
              >
            </picture>
          </div>
        </figure>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
