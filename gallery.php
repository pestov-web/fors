<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фотогалерея — Автошкола Форсаж</title>
  <link rel="preload" as="style" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header-inner.php'; ?>

  <main id="main" tabindex="-1">
    <?php
      $breadcrumbItems = [
        ['title' => 'Главная', 'url' => '/'],
        ['title' => 'Фотогалерея'],
      ];
      include __DIR__ . '/includes/breadcrumbs.php';
    ?>

    <section class="page-section gallery" aria-labelledby="gallery-title">
      <div class="u-container gallery__container">
        <header class="gallery__header">
          <h1 class="gallery__title" id="gallery-title">Фотогалерея</h1>
        </header>

        <div class="gallery-grid">
          <article class="gallery-card gallery-card--driving">
            <figure class="gallery-card__figure">
              <picture>
                <!-- bx:gallery-image:driving -->
                <source type="image/avif" srcset="assets/img/gallery/driving.avif">
                <source type="image/webp" srcset="assets/img/gallery/driving.webp">
                <img class="gallery-card__image"
                     src="assets/img/gallery/driving.jpg"
                     alt="Учебный автомобиль автошколы Форсаж"
                     loading="lazy"
                     decoding="async"
                     width="640"
                     height="360">
              </picture>
              <figcaption class="gallery-card__caption">
                Вождение
              </figcaption>
            </figure>
          </article>

          <article class="gallery-card gallery-card--team">
            <figure class="gallery-card__figure">
              <picture>
                <!-- bx:gallery-image:team -->
                <source type="image/avif" srcset="assets/img/gallery/team.avif">
                <source type="image/webp" srcset="assets/img/gallery/team.webp">
                <img class="gallery-card__image"
                     src="assets/img/gallery/team.jpg"
                     alt="Администраторы автошколы Форсаж"
                     loading="lazy"
                     decoding="async"
                     width="640"
                     height="360">
              </picture>
              <figcaption class="gallery-card__caption">
                Наши администраторы
              </figcaption>
            </figure>
          </article>

          <article class="gallery-card gallery-card--classrooms">
            <figure class="gallery-card__figure">
              <picture>
                <!-- bx:gallery-image:classrooms -->
                <source type="image/avif" srcset="assets/img/gallery/classrooms.avif">
                <source type="image/webp" srcset="assets/img/gallery/classrooms.webp">
                <img class="gallery-card__image"
                     src="assets/img/gallery/classrooms.jpg"
                     alt="Преподаватели и студенты в классах автошколы"
                     loading="lazy"
                     decoding="async"
                     width="1320"
                     height="742">
              </picture>
              <figcaption class="gallery-card__caption">
                Офисы и классы
              </figcaption>
            </figure>
          </article>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
