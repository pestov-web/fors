<?php
$pageTitle = "Автошкола Форсаж — Цены"; ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8"); ?></title>
    <link rel="preload" as="style" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
  </head>
  <body>
    <?php include __DIR__ . "/includes/header-inner.php"; ?>

    <main id="main" tabindex="-1">
      <?php
    $breadcrumbItems = [["title" =>
      "Главная", "url" => "/"], ["title" => "Цены"]]; include __DIR__ . "/includes/breadcrumbs.php"; ?>

      <section class="page-section price-intro" aria-labelledby="price-title">
        <div class="u-container price-intro__inner">
          <h1 class="price-intro__title u-text-center" id="price-title">Цены на курсы в автошколе</h1>
          <article class="price-referral" aria-labelledby="price-referral-title">
            <div class="price-referral__content">
              <h2 class="price-referral__heading" id="price-referral-title">Приведи друга — получи деньги</h2>
              <p class="price-referral__text">Приведи в нашу школу друга и получи 500 ₽!</p>
              <a class="btn btn--secondary btn--large" href="#consult-title">Записаться на курс</a>
            </div>
            <div class="price-referral__media">
              <picture>
                <img
                  src="assets/img/price/girls.png"
                  alt="Две девушки в форме черлидеров на фоне учебных автомобилей"
                  loading="lazy"
                  decoding="async"
                  width="646"
                  height="447"
                />
              </picture>
            </div>
          </article>
        </div>
      </section>

      <?php include __DIR__ . "/includes/prices-table.php"; ?>

      <?php include __DIR__ . "/includes/price-includes.php"; ?>

      <?php include __DIR__ . "/includes/form_consult.php"; ?>

      <?php include __DIR__ . "/includes/price-directions.php"; ?>

      <?php include __DIR__ . "/includes/price-advantages.php"; ?>

      <?php include __DIR__ . "/includes/categories_and_prices.php"; ?>
    </main>

    <?php include __DIR__ . "/includes/footer.php"; ?>

    <script src="assets/js/splide.min.js"></script>
    <script defer src="assets/js/app.js"></script>
  </body>
</html>
