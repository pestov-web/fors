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
      <section class="page-section" aria-labelledby="categories-title">
        <div class="u-container"><?php include __DIR__ . "/includes/categories_and_prices.php"; ?></div>
        <?php include __DIR__ . "/includes/office-map.php"; ?>
      </section>

      <section class="page-section page-section--light" aria-labelledby="steps-title">
        <div class="u-container">
          <h2 class="section-title section-title--center" id="steps-title">Этапы обучения</h2>
          <?php include __DIR__ . "/includes/steps.php"; ?>
        </div>
        <?php include __DIR__ . "/includes/fast-banner.php"; ?>
      </section>
      <?php include __DIR__ . "/includes/faq-accordion.php"; ?>
      <?php include __DIR__ . "/includes/news_and_discount.php"; ?>
      <?php include __DIR__ . "/includes/form_consult.php"; ?>
    </main>
    <?php include __DIR__ . "/includes/footer.php"; ?>

    <script defer src="assets/js/app.js"></script>
  </body>
</html>
