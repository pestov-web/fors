<?php
  $pageTitle = 'Дополнительная скидка 13% — как получить налоговый вычет';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
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
        ['title' => 'Новости', 'url' => 'news.php'],
        ['title' => 'Дополнительная скидка 13%'],
      ];
      include __DIR__ . '/includes/breadcrumbs.php';
    ?>

    <section class="page-section news-detail" aria-labelledby="news-detail-heading">
      <div class="news-detail__inner u-container">
        <!-- bx:news-detail -->
        <article class="news-detail__article">
          <header class="news-detail__header">
            <h1 class="news-detail__title" id="news-detail-heading">
              Дополнительная скидка 13% — как? Читайте!
            </h1>
            <p class="news-detail__meta">
              <time class="news-detail__date" datetime="2025-04-05">5 апреля 2025</time>
            </p>
          </header>

          <div class="news-detail__content">
            <p class="news-detail__lead">
              Учащиеся автошколы, в большинстве своём, и не подозревают о том, что при получении платного образования можно вернуть ощутимую часть уплаченных за год налогов. Автошкола считается образовательным учреждением, и оплата обучения в ней подлежит социальному налоговому вычету.
            </p>
            <p>
              Сегодня мы расскажем 5 интересных фактов про вычет с обучения.
            </p>

            <figure class="news-detail__figure">
              <!-- bx:news-detail-image -->
              <picture>
                <img
                  class="news-detail__image"
                  src="assets/icons/placeholders/news-detail-placeholder.svg"
                  alt="Ученик автошколы на учебном мотоцикле"
                  loading="lazy"
                  decoding="async"
                  width="960"
                  height="640">
              </picture>
              <figcaption class="news-detail__figure-caption u-visually-hidden">
                Иллюстрация к материалу про налоговый вычет на обучение
              </figcaption>
            </figure>

            <ol class="news-detail__list">
              <li class="news-detail__list-item">
                <p>Возврат налога за обучение в РФ возможен не только за обучение в вузе, но и в автошколе.</p>
              </li>
              <li class="news-detail__list-item">
                <p>Налоговый вычет за обучение можно оформить за тот год, в котором оплачивалось обучение.</p>
              </li>
              <li class="news-detail__list-item">
                <p>До конца 2022 года декларации можно подать за 2019, 2020, 2021 год!</p>
              </li>
              <li class="news-detail__list-item">
                <p>Имеете право на налоговый вычет за обучение если:</p>
                <ul class="news-detail__sublist">
                  <li>Вы официально трудоустроены и работодатель отчисляет в бюджет налог в размере 13% от вашей заработной платы.</li>
                  <li>Вы оплачивали своё обучение или очное обучение своего ребёнка (до 24 лет), брата, сестры.</li>
                </ul>
              </li>
              <li class="news-detail__list-item">
                <p>Сумма возврата за год:</p>
                <ul class="news-detail__sublist">
                  <li>За своё обучение, брата и сестры максимальный возврат составляет до 15&nbsp;600&nbsp;руб.</li>
                  <li>На каждого учащегося очно ребёнка до 6&nbsp;500&nbsp;руб.</li>
                </ul>
              </li>
            </ol>
          </div>

          <nav class="news-detail__nav" aria-label="Навигация по новостям">
            <!-- bx:news-detail-navigation -->
            <a class="news-detail__nav-link news-detail__nav-link--prev" href="#" rel="prev">
              <span class="news-detail__nav-icon" aria-hidden="true">
                <img src="assets/icons/left_arrow.svg" alt="" width="25" height="25" loading="lazy" decoding="async">
              </span>
              <span class="news-detail__nav-label">Предыдущая акция</span>
            </a>
            <a class="news-detail__nav-link news-detail__nav-link--next" href="#" rel="next">
              <span class="news-detail__nav-icon" aria-hidden="true">
                <img src="assets/icons/right_arrow.svg" alt="" width="25" height="25" loading="lazy" decoding="async">
              </span>
              <span class="news-detail__nav-label">Следующая акция</span>
            </a>
          </nav>
        </article>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
