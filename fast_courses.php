
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Автошкола Форсаж</title>
  <link rel="preload" as="style" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
  <?php include __DIR__ . "/includes/header-inner.php"; ?>

  <main id="main" tabindex="-1">
    <?php
    $breadcrumbItems = [["title" => "Главная", "url" => "/"], ["title" => "Ускоренные курсы вождения"]];
    include __DIR__ . "/includes/breadcrumbs.php";
    ?>

    <section class="page-section page-section--light fast-hero" aria-labelledby="fast-hero-title">
      <div class="u-container fast-hero__inner">
        <div class="fast-hero__content">
          <h1 class="fast-hero__title" id="fast-hero-title">Ускоренные курсы вождения</h1>
          <div class="fast-hero__grid">
            <p>Ускоренные курсы вождения — отличный выбор для тех, кто ценит своё свободное время. В автошколе «Форсаж» работают лучшие инструкторы Воронежа, готовые научить студентов всем тонкостям
управления транспортом в кратчайшие сроки. Несмотря на то что прохождение программы идёт быстрее, умения ученика будут на высоком уровне.
Самый важный нюанс заключается в том, что количество практических часов не уменьшается, а проработка материала остаётся качественной.
</p>
            <p>График подбирается в индивидуальном порядке, под удобные клиенту дни. Будущего водителя ждут как теоретические, так и практические занятия на современных и хорошо обслуживаемых транспортных
средствах.
Экспресс-обучение не привязано к конкретной категории. Пройти его могут как будущие мотоциклисты, так и те, кто открывает группу «Е» для управления транспортными средствами с прицепами и полуприцепами.
</p>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section fast-benefits" aria-labelledby="fast-benefits-title">
      <div class="u-container">
        <div class="fast-section-heading fast-section-heading--center">
          <h2 class="fast-section-heading__title" id="fast-benefits-title">Преимущества экспресс-курса обучения вождению</h2>
          <p class="fast-section-heading__subtitle">Ускоряем процесс получения прав — сохраняя высокое качество подготовки и контроль результатов на каждом этапе.</p>
        </div>
        <div class="fast-benefits__grid">
          <article class="fast-benefit-card">
            <div class="fast-benefit-card__body">
              <h3 class="fast-benefit-card__title">Выбор<br> расписания практики <br>в удобном темпе</h3>
            </div>
            <figure class="fast-benefit-card__media">
              <img src="assets/img/fast-benefits/benefit-1.png" alt="Автомобиль автошколы с инструктором" loading="lazy" decoding="async" width="315" height="192">
            </figure>
          </article>
          <article class="fast-benefit-card">
            <div class="fast-benefit-card__body">
              <h3 class="fast-benefit-card__title">Регулярные тренировки на автодроме и в городе</h3>
            </div>
            <figure class="fast-benefit-card__media">
              <img src="assets/img/fast-benefits/benefit-2.png" alt="Учебный автомобиль на автодроме" loading="lazy" decoding="async" width="315" height="192">
            </figure>
          </article>
          <article class="fast-benefit-card">
            <div class="fast-benefit-card__body">
              <h3 class="fast-benefit-card__title">Возможность изучать теорию в дистанционном формате</h3>
            </div>
            <figure class="fast-benefit-card__media">
              <img src="assets/img/fast-benefits/benefit-3.png" alt="Информационный стенд автошколы Форсаж" loading="lazy" decoding="async" width="315" height="192">
            </figure>
          </article>
          <article class="fast-benefit-card">
            <div class="fast-benefit-card__body">
              <h3 class="fast-benefit-card__title">Быстрый выход на выпускные экзамены и сдачу в ГИБДД</h3>
            </div>
            <figure class="fast-benefit-card__media">
              <img src="assets/img/fast-benefits/benefit-4.png" alt="Выпускница автошколы празднует сдачу экзамена" loading="lazy" decoding="async" width="315" height="192">
            </figure>
          </article>
        </div>
      </div>
    </section>

    <section class="page-section page-section--light" aria-labelledby="fast-steps-title">
      <div class="u-container">
        <div class="fast-section-heading fast-section-heading--center">
          <h2 class="fast-section-heading__title" id="fast-steps-title">Этапы получения водительского удостоверения</h2>
          <p class="fast-section-heading__subtitle">Подготовили ускоренный маршрут — от первого звонка до экзаменов в ГИБДД.</p>
        </div>
        <?php include __DIR__ . "/includes/steps.php"; ?>
      </div>
    </section>

    <section class="page-section fast-docs" aria-labelledby="fast-docs-title">
      <div class="u-container">
        <div class="fast-section-heading fast-section-heading--center">
          <h2 class="fast-section-heading__title" id="fast-docs-title">Какие документы нужны</h2>
        </div>
        <div class="fast-docs__grid">
          <article class="fast-doc-card">
            <h3 class="fast-doc-card__title">Паспорт</h3>
            <img class="fast-doc-card__image" src="assets/img/passport.png" alt="Паспорт гражданина" loading="lazy" decoding="async" width="350" height="350">
          </article>
          <article class="fast-doc-card">
            <h3 class="fast-doc-card__title">Медицинское заключение</h3>
            <img class="fast-doc-card__image" src="assets/img/medical.png" alt="Медицинское заключение" loading="lazy" decoding="async" width="350" height="350">
          </article>
          <article class="fast-doc-card">
            <h3 class="fast-doc-card__title">Водительское удостоверение (если есть)</h3>
            <img class="fast-doc-card__image" src="assets/img/driver_proof.png" alt="Водительское удостоверение" loading="lazy" decoding="async" width="350" height="350">
          </article>
        </div>
      </div>
    </section>

    <section class="page-section page-section--light fast-why" aria-labelledby="fast-why-title">
      <div class="u-container">
        <div class="fast-section-heading fast-section-heading--center">
          <h2 class="fast-section-heading__title" id="fast-why-title">Почему выбирают нас</h2>
          <p class="fast-section-heading__subtitle">Наша автошкола — одна из старейших в Воронеже. Ученики «Форсажа» получают множество преимуществ:</p>
        </div>
        <div class="why-grid">
          <article class="why-card why-card--online">
            <div class="why-card__icon" aria-hidden="true">
              <img src="assets/icons/online.svg" alt="" width="48" height="48" loading="lazy" decoding="async">
            </div>
            <h3 class="why-card__title why-card__title--upper">Прохождение теории в&nbsp;онлайн-режиме</h3>
            <p class="why-card__caption">Это экономит время, ведь не нужно ехать в учебный класс.</p>
          </article>

          <article class="why-card why-card--photo">
            <div class="why-card__icon">
              <picture>
                <img src="assets/img/why-img.png" alt="Фотография учеников автошколы" loading="lazy" decoding="async" width="480" height="320">
              </picture>
            </div>
          </article>

          <article class="why-card why-card--autodrome">
            <div class="why-card__icon" aria-hidden="true">
              <img src="assets/icons/courses/autodrom.svg" alt="" width="48" height="48" loading="lazy" decoding="async">
            </div>
            <h3 class="why-card__title">Собственный автодром</h3>
            <p class="why-card__caption">И отличный парк автомобилей.</p>
          </article>

          <article class="why-card why-card--branches">
            <div class="why-card__icon" aria-hidden="true">
              <img src="assets/icons/courses/filials.svg" alt="" width="48" height="48" loading="lazy" decoding="async">
            </div>
            <h3 class="why-card__title">Филиалы в каждом районе города</h3>
            <p class="why-card__caption">Ходить на лекции можно в тот, что ближе к дому или работе.</p>
          </article>

          <article class="why-card why-card--transparent">
            <div class="why-card__icon" aria-hidden="true">
              <img src="assets/icons/courses/prices.svg" alt="" width="48" height="48" loading="lazy" decoding="async">
            </div>
            <h3 class="why-card__title">Прозрачные цены</h3>
            <p class="why-card__caption">Никаких скрытых платежей и дополнительных квитанций, например, за ГСМ и аренду тренировочной площадки.</p>
          </article>

          <article class="why-card why-card--instructors">
            <div class="why-card__icon" aria-hidden="true">
              <img src="assets/icons/courses/professionals.svg" alt="" width="48" height="48" loading="lazy" decoding="async">
            </div>
            <h3 class="why-card__title">Профессиональные инструкторы</h3>
            <p class="why-card__caption">Специалисты с большим опытом преподавания, успевшие обучить тысячи студентов.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="page-section fast-pricing" aria-labelledby="fast-pricing-title">
      <div class="u-container">
        <div class="fast-section-heading fast-section-heading--center">
          <h2 class="fast-section-heading__title" id="fast-pricing-title">Курсы и стоимость</h2>
          <p class="fast-section-heading__subtitle">Экспресс-группы открываем каждый месяц. Выберите нужную категорию и формат обучения.</p>
        </div>
        <div class="fast-pricing__table-wrapper">
          <table class="fast-pricing__table">
            <thead>
              <tr>
                <th scope="col">Курсы</th>
                <th scope="col">Стоимость</th>
                <th scope="col">Вождение</th>
                <th scope="col">Теория</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="pricing-course">
            <span class="pricing-course__icon"><img src="assets/icons/courses/moto-table.svg" alt="" width="32" height="32"></span>
                    <span class="pricing-course__name">Категория A, A1</span>
                  </div>
                </th>
                <td><span class="pricing-cost">7 990 ₽</span></td>
                <td>400 ₽/час вождения</td>
                <td>108 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="pricing-course">
            <span class="pricing-course__icon"><img src="assets/icons/courses/car-table.svg" alt="" width="32" height="32"></span>
                    <span class="pricing-course__name">Категория B, B1</span>
                  </div>
                </th>
                <td><span class="pricing-cost">10 990 ₽</span></td>
                <td>450 ₽/час вождения</td>
                <td>130 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="pricing-course">
                    <span class="pricing-course__icon"><img src="assets/icons/courses/car-table.svg" alt="" width="32" height="32"></span>
                    <span class="pricing-course__name">Категория B, (АКПП)</span>
                  </div>
                </th>
                <td><span class="pricing-cost">10 990 ₽</span></td>
                <td>500 ₽/час вождения</td>
                <td>130 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="pricing-course">
                    <span class="pricing-course__icon"><img src="assets/icons/courses/truck-table.svg" alt="" width="32" height="32"></span>
                    <span class="pricing-course__name">Категории C, C1</span>
                  </div>
                </th>
                <td><span class="pricing-cost">10 990 ₽</span></td>
                <td>750 ₽/час вождения</td>
                <td>168 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="pricing-course">
                    <span class="pricing-course__icon"><img src="assets/icons/courses/bus-table.svg" alt="" width="32" height="32"></span>
                    <span class="pricing-course__name">Категория D, D1</span>
                  </div>
                </th>
                <td><span class="pricing-cost">10 990 ₽</span></td>
                <td>800 ₽/час вождения</td>
                <td>192 часа входят в стоимость</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="page-section" aria-labelledby="consult-title">
      <?php include __DIR__ . "/includes/form_consult.php"; ?>
    </section>

    <section class="page-section page-section--light" aria-labelledby="categories-title">
      <div class="u-container">
        <?php include __DIR__ . "/includes/categories_and_prices.php"; ?>
      </div>
    </section>
  </main>
  <?php include __DIR__ . "/includes/footer.php"; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
