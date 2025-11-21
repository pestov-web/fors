<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Автошкола Форсаж</title>

    <link rel="preload" as="style" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
  </head>
  <body>
    <?php include __DIR__ . "/includes/header-index.php"; ?>

    <main id="main" tabindex="-1">
      <!-- bx:breadcrumb -->
      <section class="home-hero" aria-labelledby="hero-title">
        <div class="home-hero__container">
          <div class="home-hero__content">
            <h1 class="home-hero__title" id="hero-title">Автошкола Форсаж в Воронеже</h1>

            <p class="home-hero__lead">
              Скидка на обучение на любую категорию! Всего
              <span class="home-hero__price-current">12&nbsp;990&nbsp;₽</span>
              вместо
              <span class="home-hero__price-old">15&nbsp;990&nbsp;₽</span>
              ! Спешите, количество мест и срок акции ограничены.
            </p>
            <div class="home-hero__offer" role="group" aria-labelledby="hero-offer-title">
              <h2 class="home-hero__offer-title" id="hero-offer-title">До конца акции осталось</h2>
              <dl class="home-hero__timer" aria-label="Таймер окончания акции">
                <div class="home-hero__timer-item">
                  <dd class="home-hero__timer-value">
                    <time datetime="P5D">5</time>
                  </dd>
                  <dt class="home-hero__timer-label">Дней</dt>
                </div>
                <div class="home-hero__timer-item">
                  <dd class="home-hero__timer-value">
                    <time datetime="PT48H">48</time>
                  </dd>
                  <dt class="home-hero__timer-label">Часов</dt>
                </div>
                <div class="home-hero__timer-item">
                  <dd class="home-hero__timer-value">
                    <time datetime="PT0M">00</time>
                  </dd>
                  <dt class="home-hero__timer-label">Минут</dt>
                </div>
                <div class="home-hero__timer-item">
                  <dd class="home-hero__timer-value">
                    <time datetime="PT0S">00</time>
                  </dd>
                  <dt class="home-hero__timer-label">Секунд</dt>
                </div>
              </dl>
              <a class="btn btn--primary btn--large btn--block" href="#consult-title">Записаться на курс</a>
              <div class="home-hero__badge">
                <span class="home-hero__badge-label">осталось</span>
                <span class="home-hero__badge-value">15</span>
                <span class="home-hero__badge-label">мест</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-section">
        <div class="social-banner">
          <h5 class="social-banner__title">Не хочешь говорить по телефону? Напиши онлайн!</h5>
          <div class="social-banner__buttons">
            <a href="#" class="btn btn--telegram">
              <span class="btn__icon" aria-hidden="true"></span>
              Связаться в TG
            </a>
            <a href="#" class="btn btn--whatsapp">
              <span class="btn__icon" aria-hidden="true"></span>
              Связаться в WA
            </a>
            <a href="#" class="btn btn--vk">
              <span class="btn__icon" aria-hidden="true"></span>
              Связаться в VK
            </a>
          </div>
        </div>
      </section>
      <?php include __DIR__ . "/includes/categories_and_prices.php"; ?>
      <section class="page-section" aria-labelledby="categories-title">
        <?php include __DIR__ . "/includes/office-map.php"; ?>
      </section>

      <section class="page-section page-section--light" aria-labelledby="steps-title">
        <div class="u-container">
          <h2 class="section-title section-title--center" id="steps-title">Этапы обучения</h2>
          <?php include __DIR__ . "/includes/steps.php"; ?>
        </div>
        <?php include __DIR__ . "/includes/fast-banner.php"; ?>
      </section>

      <?php include __DIR__ . "/includes/about_highlights.php"; ?>

      <section class="page-section remote">
        <h2 class="remote__title">Дистанционное обучение</h2>
        <div class="remote-banner">
          <ul class="remote-banner__content">
            <li class="remote-banner__item">
              <span class="remote-banner__item-icon remote-banner__item-icon--hat" aria-hidden="true"></span>
              Школа у вас дома
            </li>
            <li class="remote-banner__item">
              <span class="remote-banner__item-icon remote-banner__item-icon--refresh" aria-hidden="true"></span>
              Возможность повторного просмотра занятий
            </li>
            <li class="remote-banner__item">
              <span class="remote-banner__item-icon remote-banner__item-icon--online" aria-hidden="true"></span>
              Интернет-обучение в любой точке мира
            </li>
            <li class="remote-banner__item">
              <span class="remote-banner__item-icon remote-banner__item-icon--percent" aria-hidden="true"></span>
              Экономия ваших средств, скидка до 60%
            </li>
            <li class="remote-banner__item">
              <span class="remote-banner__item-icon remote-banner__item-icon--teacher" aria-hidden="true"></span>
              Общение с преподавателем в реальном времени
            </li>
          </ul>
          <figure class="remote-banner__image-wrapper">
            <picture>
              <source type="image/webp" srcset="assets/img/remote.webp 1x, assets/img/remote@2x.webp 2x" />
              <img
                src="assets/img/remote.webp"
                alt="Баннер удалённого обучения"
                class="remote-banner__image"
                loading="lazy"
                width="646"
                height="558"
              />
            </picture>
          </figure>
        </div>
        <div class="profit-banner">
          <h5 class="profit-banner__title">
            Что вы получаете при обучении вождению автомобиля в нашей школе в Воронеже
          </h5>
          <p class="profit-banner__list-title">После завершения курса:</p>
          <ul class="profit-banner__list">
            <li class="profit-banner__item">
              <span class="profit-banner__item-icon" aria-hidden="true"></span>
              будете в совершенстве владеть правилами дорожного движения, научитесь быстро решать экзаменационные
              билеты;
            </li>
            <li class="profit-banner__item">
              <span class="profit-banner__item-icon" aria-hidden="true"></span>
              приобретёте навыки поездок по городу, а также выполнения упражнений «Гараж», «Эстакада», «Параллельная
              парковка», «Разворот в ограниченном пространстве», сумеете с лёгкостью применять их во время
              самостоятельной езды;
            </li>
            <li class="profit-banner__item">
              <span class="profit-banner__item-icon" aria-hidden="true"></span>
              без проблем сдадите внутренний и внешний экзамен;
            </li>
            <li class="profit-banner__item">
              <span class="profit-banner__item-icon" aria-hidden="true"></span>
              при необходимости можете взять дополнительные тренировки с инструктором.
            </li>
          </ul>
          <p class="profit-banner__conclusion">
            По результатам обучения получите водительское удостоверение и станете водителем, который будет уверенно
            ездить за рулём один.
          </p>
          <a class="btn btn--secondary btn--large profit-banner__btn">Записаться на курс</a>
        </div>
      </section>
      <section class="page-section about-us">
        <h2 class="about-us__title">что о нас говорят</h2>
        <div class="about-us__head">
          <div class="about-us__buttons">
            <button class="about-us__btn about-us__btn_active">Текст</button>
            <button class="about-us__btn">Видео</button>
          </div>
          <a href="#" class="about-us__link">
            Показать все
            <span class="about-us__link-icon" aria-hidden="true"></span>
          </a>
        </div>
        <ul class="about-us__list">
          <li class="reviews-card">
            <span class="reviews-card__author">Татьяна Дверцова</span>
            <time class="reviews-card__date" datetime="2024-07-18T16:38">18.07.2024 | 16:38</time>
            <p class="reviews-card__review-text">
              Благодарю всю командуавтошколы «Форсаж», отменеджера в офисе доруководителей!Очень грамотно с
              слаженноработают. Особеннаяблагодарность инструкторупо вождению БондаревуДмитрию Васильевичу,который
              оченьответственно, терпеливо,грамотно обучает и находит подход к каждому ученику.
            </p>
          </li>
          <li class="reviews-card">
            <span class="reviews-card__author">Татьяна Дверцова</span>
            <time class="reviews-card__date" datetime="2024-07-18T16:38">18.07.2024 | 16:38</time>
            <p class="reviews-card__review-text">
              В июне учился на категорию А. Сдал с первого раза! Обучение на уровне! И крутой мотик для практики!
            </p>
          </li>
          <li class="reviews-card">
            <span class="reviews-card__author">Татьяна Дверцова</span>
            <time class="reviews-card__date" datetime="2024-07-18T16:38">18.07.2024 | 16:38</time>
            <p class="reviews-card__review-text">
              Благодарю всю командуавтошколы «Форсаж», отменеджера в офисе доруководителей!Очень грамотно с
              слаженноработают. Особеннаяблагодарность инструкторупо вождению БондаревуДмитрию Васильевичу,который
              оченьответственно, терпеливо,грамотно обучает и находит подход к каждому ученику.
            </p>
          </li>
          <li class="reviews-card">
            <span class="reviews-card__author">Татьяна Дверцова</span>
            <time class="reviews-card__date" datetime="2024-07-18T16:38">18.07.2024 | 16:38</time>
            <p class="reviews-card__review-text">
              В июне учился на категорию А. Сдал с первого раза! Обучение на уровне! И крутой мотик для практики!
            </p>
          </li>
        </ul>
      </section>
      <?php include __DIR__ . "/includes/faq-accordion.php"; ?>
      <?php include __DIR__ . "/includes/news_and_discount.php"; ?>
      <?php include __DIR__ . "/includes/form_consult.php"; ?>
    </main>
    <?php include __DIR__ . "/includes/footer.php"; ?>

    <script src="assets/js/splide.min.js"></script>
    <script defer src="assets/js/app.js"></script>
  </body>
</html>
