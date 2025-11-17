<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Расписание занятий — Автошкола Форсаж</title>
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
        ['title' => 'Расписание занятий'],
      ];
      include __DIR__ . '/includes/breadcrumbs.php';
    ?>

    <section class="page-section schedule" aria-labelledby="schedule-title">
      <div class="u-container schedule__container">
        <header class="schedule__header">
          <h1 class="schedule__title" id="schedule-title">Расписание</h1>
        </header>

        <div class="schedule__layout">
          <aside class="schedule__sidebar" aria-labelledby="schedule-sidebar-title">
            <h2 class="schedule__sidebar-title u-visually-hidden" id="schedule-sidebar-title">Районы проведения занятий</h2>
            <?php include __DIR__ . '/includes/schedule-menu.php'; ?>
          </aside>

          <div class="schedule__content" id="schedule-main">
            <section class="schedule-district" id="district-central" aria-labelledby="district-central-title" hidden>
              <h2 class="u-visually-hidden" id="district-central-title">Центральный район</h2>
              <!-- bx:schedule-district:central -->
            </section>

            <section class="schedule-district" id="district-left-bank" aria-labelledby="district-left-bank-title" hidden>
              <h2 class="u-visually-hidden" id="district-left-bank-title">Левобережный район</h2>
              <!-- bx:schedule-district:left-bank -->
            </section>

            <section class="schedule-district" id="district-komintern" aria-labelledby="district-komintern-title" hidden>
              <h2 class="u-visually-hidden" id="district-komintern-title">Коминтерновский район</h2>
              <!-- bx:schedule-district:komintern -->
            </section>

            <section class="schedule-district" id="district-sovetsky" aria-labelledby="district-sovetsky-title" hidden>
              <h2 class="u-visually-hidden" id="district-sovetsky-title">Советский район</h2>
              <!-- bx:schedule-district:sovetsky -->
            </section>

            <section class="schedule-district schedule-district--active" id="district-railway" aria-labelledby="district-railway-title">
              <h2 class="u-visually-hidden" id="district-railway-title">Железнодорожный район</h2>

              <article class="schedule-card">
                <header class="schedule-card__header">
                  <p class="schedule-card__location">
                    Ул. Плехановская, 35 (ост. Кольцовская, 2 этаж)
                  </p>
                </header>
                <div class="schedule-card__body">
                  <!-- bx:schedule-timetable:railway-plehanovskaya -->
                  <div class="schedule-card__table" role="region" aria-live="polite">
                    <table class="schedule-table">
                      <caption class="u-visually-hidden">Расписание занятий на ул. Плехановская, 35</caption>
                      <thead>
                        <tr>
                          <th scope="col">Время</th>
                          <th scope="col">Дата</th>
                          <th scope="col">Событие</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Время">13:00</td>
                          <td data-label="Дата">17.05.2025</td>
                          <td data-label="Событие">
                            Первое занятие новой группы (занятия по сб с 13:00–16:00)
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Время">13:00</td>
                          <td data-label="Дата">17.05.2025</td>
                          <td data-label="Событие">
                            Первое занятие новой группы (занятия по сб с 13:00–16:00)
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </article>

              <article class="schedule-card">
                <header class="schedule-card__header">
                  <p class="schedule-card__location">
                    Ул. Плехановская, 35 (ост. Кольцовская, 2 этаж)
                  </p>
                </header>
                <div class="schedule-card__body">
                  <!-- bx:schedule-timetable:railway-plehanovskaya-2 -->
                  <div class="schedule-card__table" role="region" aria-live="polite">
                    <table class="schedule-table">
                      <caption class="u-visually-hidden">Расписание занятий на ул. Плехановская, 35, дополнительная группа</caption>
                      <thead>
                        <tr>
                          <th scope="col">Время</th>
                          <th scope="col">Дата</th>
                          <th scope="col">Событие</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Время">13:00</td>
                          <td data-label="Дата">17.05.2025</td>
                          <td data-label="Событие">
                            Первое занятие новой группы (занятия по сб с 13:00–16:00)
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Время">13:00</td>
                          <td data-label="Дата">17.05.2025</td>
                          <td data-label="Событие">
                            Первое занятие новой группы (занятия по сб с 13:00–16:00)
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
