<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обучение на спецсигналы — Автошкола Форсаж</title>
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
        ['title' => 'Обучение на спецсигналы'],
      ];
      include __DIR__ . '/includes/breadcrumbs.php';
    ?>

    <section class="page-section specsignal" aria-labelledby="specsignal-title">
      <div class="u-container specsignal__container">
        <aside class="specsignal__aside" aria-labelledby="specsignal-aside-title">
          <h2 class="specsignal-aside__title" id="specsignal-aside-title">Курсантам:</h2>
          <ul class="specsignal-aside__list" role="list">
            <li class="specsignal-aside__item">
              <a class="specsignal-aside__link" href="fast_courses.php">Автокурс</a>
            </li>
            <li class="specsignal-aside__item">
              <a class="specsignal-aside__link" href="schedule.php">Очное обучение</a>
            </li>
            <li class="specsignal-aside__item">
              <a class="specsignal-aside__link" href="faq.php">Вопросы и ответы</a>
            </li>
            <li class="specsignal-aside__item">
              <a class="specsignal-aside__link specsignal-aside__link--primary" href="contacts.php">
                Инструкторы по вождению
              </a>
            </li>
          </ul>
        </aside>

        <article class="specsignal__content">
          <header class="specsignal__header">
            <h1 class="specsignal__title" id="specsignal-title">Обучение на спецсигналы</h1>
            <p class="specsignal__lead">
              Обучение на спецсигналы — это программа для водителей, управляющих аварийно-спасательными, медицинскими,
              коммунальными и другими спецмашинами. Мы детально разбираем федеральное законодательство, тактику
              безопасного вождения в сложных условиях и алгоритмы применения спецсигналов. Курс завершает аттестация,
              после которой водитель получает право управления транспортом с проблесковыми маяками и СГУ.
            </p>
          </header>

          <section class="specsignal-section" aria-labelledby="specsignal-program-title">
            <h2 class="specsignal-section__title" id="specsignal-program-title">Что включает автокурс</h2>
            <ol class="specsignal-list" role="list">
              <li>Нормативно-правовая база — все документы, регулирующие обязанности водителя и виды ответственности.</li>
              <li>Технические особенности машин — конструкция, назначение, оснащение спецтехники.</li>
              <li>Диагностика и профилактика неисправностей, контроль состояния техники.</li>
              <li>Практика экстренных действий: выбор траектории, работа с СГУ, приёмы безопасного торможения.</li>
              <li>Коммуникация с диспетчером и экстренными службами, оформление документации.</li>
            </ol>
            <p class="specsignal-note">Программа адаптируется под специфику подразделения и включает стажировку на автодроме.</p>
          </section>

          <section class="specsignal-section" aria-labelledby="specsignal-features-title">
            <h2 class="specsignal-section__title" id="specsignal-features-title">
              Особенности обучения на спецсигналы от автошколы «Форсаж» в Воронеже
            </h2>
            <p>
              Проводим занятия в нашем офисе и на выезде: удобно для временных графиков экипажей. Теория возьмёт
              один-два дня: изучим нормативные акты, особенности организации колонн и действия при ДТП. Практика проходит
              на специально подготовленных маршрутах и автодроме, все упражнения согласованы с инспекторами ГИБДД.
            </p>
          </section>

          <section class="specsignal-section" aria-labelledby="specsignal-benefits-title">
            <h2 class="specsignal-section__title" id="specsignal-benefits-title">Преимущества сотрудничества с нами</h2>
            <ol class="specsignal-list" role="list">
              <li>Прозрачное ценообразование: оплачиваете только зафиксированную сумму в договоре.</li>
              <li>Собственный автопарк и автодром — учебные занятия проходят на тех же машинах, что и экзамен.</li>
              <li>Филиалы по всему городу, удобный график и выезд преподавателя на предприятие.</li>
              <li>Опытные инструкторы, профессиональные водители служб, поделятся практическими рекомендациями.</li>
              <li>Продление договоров и корректировка программ без доплат — поддерживаем команды в форме.</li>
            </ol>
            <p class="specsignal-note">
              Занятия проводятся в интерактивном формате: разбор видеоситуаций, тренировки на автодроме, моделирование
              маршрутов. По итогам слушатели сдают внутренний экзамен и получают свидетельство установленного образца.
            </p>
          </section>

          <section class="specsignal-section" aria-labelledby="specsignal-request-title">
            <h2 class="specsignal-section__title" id="specsignal-request-title">Как оставить заявку</h2>
            <ol class="specsignal-list" role="list">
              <li>Соберите списки сотрудников и контактные данные — поможем подобрать оптимальный формат обучения.</li>
              <li>Передайте данные менеджеру — согласуем график, подготовим договор и персональный план занятий.</li>
              <li>Закрепим инструкторов, проведём стартовую лекцию в офисе или онлайн и приступим к практике.</li>
            </ol>
            <p class="specsignal-note">
              Документы и записи мы подготовим сами, вам останется только обеспечить присутствие сотрудников и транспорт.
            </p>
          </section>
        </article>
      </div>
    </section>

    <section class="page-section specsignal-pricing" aria-labelledby="specsignal-pricing-title">
      <div class="u-container">
        <h2 class="specsignal-section__title specsignal-section__title--center" id="specsignal-pricing-title">
          Курсы и стоимость
        </h2>
        <div class="specsignal-table-wrapper" role="region" aria-live="polite">
          <!-- bx:specsignal-pricing-table -->
          <table class="specsignal-table">
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
                  <div class="specsignal-course">
                    <span class="specsignal-course__icon" aria-hidden="true">
                      <img src="assets/icons/courses/moto-table.svg" alt="" width="32" height="32" loading="lazy">
                    </span>
                    Категория A, A1
                  </div>
                </th>
                <td data-label="Стоимость">7 990 ₽</td>
                <td data-label="Вождение">400 ₽ / час вождения</td>
                <td data-label="Теория">108 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="specsignal-course">
                    <span class="specsignal-course__icon" aria-hidden="true">
                      <img src="assets/icons/courses/car-table.svg" alt="" width="32" height="32" loading="lazy">
                    </span>
                    Категория B, B1
                  </div>
                </th>
                <td data-label="Стоимость">10 990 ₽</td>
                <td data-label="Вождение">450 ₽ / час вождения</td>
                <td data-label="Теория">124 часа входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="specsignal-course">
                    <span class="specsignal-course__icon" aria-hidden="true">
                      <img src="assets/icons/courses/bus-table.svg" alt="" width="32" height="32" loading="lazy">
                    </span>
                    Категория B, (АКПП)
                  </div>
                </th>
                <td data-label="Стоимость">10 990 ₽</td>
                <td data-label="Вождение">450 ₽ / час вождения</td>
                <td data-label="Теория">124 часа входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="specsignal-course">
                    <span class="specsignal-course__icon" aria-hidden="true">
                      <img src="assets/icons/courses/truck-table.svg" alt="" width="32" height="32" loading="lazy">
                    </span>
                    Категория C, C1
                  </div>
                </th>
                <td data-label="Стоимость">10 990 ₽</td>
                <td data-label="Вождение">750 ₽ / час вождения</td>
                <td data-label="Теория">180 часов входят в стоимость</td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="specsignal-course">
                    <span class="specsignal-course__icon" aria-hidden="true">
                      <img src="assets/icons/courses/bus-table.svg" alt="" width="32" height="32" loading="lazy">
                    </span>
                    Категория D, D1
                  </div>
                </th>
                <td data-label="Стоимость">10 990 ₽</td>
                <td data-label="Вождение">800 ₽ / час вождения</td>
                <td data-label="Теория">192 часа входят в стоимость</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="page-section specsignal-consult" aria-labelledby="specsignal-consult-title">
      <div class="u-container specsignal-consult__container">
        <div class="specsignal-consult__content">
          <h2 class="specsignal-consult__title" id="specsignal-consult-title">Получи консультацию прямо сейчас!</h2>
          <p class="specsignal-consult__subtitle">Оставьте контакты — менеджер свяжется в течение одного рабочего дня.</p>
          <form class="specsignal-form" action="#" method="post">
            <!-- bx:form-specsignal -->
            <div class="specsignal-form__fields">
              <label class="specsignal-form__field">
                <span class="specsignal-form__label">Ваше имя</span>
                <input class="specsignal-form__input" type="text" name="name" autocomplete="name" required>
              </label>
              <label class="specsignal-form__field">
                <span class="specsignal-form__label">Ваш телефон</span>
                <input class="specsignal-form__input" type="tel" name="phone" autocomplete="tel" inputmode="tel" required>
              </label>
            </div>
            <button class="specsignal-form__submit" type="submit">
              Оставить заявку
            </button>
          </form>
        </div>
      </div>
    </section>

    <section class="page-section specsignal-tiers" aria-labelledby="specsignal-tiers-title">
      <div class="u-container">
        <header class="specsignal-tiers__header">
          <h2 class="specsignal-section__title specsignal-section__title--center" id="specsignal-tiers-title">
            Категории и цены
          </h2>
          <p class="specsignal-tiers__subtitle">
            Все цены актуальны и подходят как для частных водителей, так и для корпоративных заказчиков.
          </p>
        </header>

        <div class="specsignal-tiers__grid">
          <!-- bx:specsignal-tier-cards -->
          <article class="specsignal-tier">
            <header class="specsignal-tier__header">
              <p class="specsignal-tier__badge">B</p>
              <h3 class="specsignal-tier__title">Обучение на категорию B</h3>
            </header>
            <p class="specsignal-tier__text">
              Для легковых автомобилей до 3,5 тонн. Особое внимание уделяем работе с проблесковыми маяками.
            </p>
            <dl class="specsignal-tier__meta">
              <div class="specsignal-tier__row">
                <dt>Срок обучения</dt>
                <dd>до 2,5 месяца</dd>
              </div>
              <div class="specsignal-tier__row">
                <dt>Форма обучения</dt>
                <dd>очная / дистанционная</dd>
              </div>
            </dl>
            <p class="specsignal-tier__price">от 40 000 ₽</p>
            <button class="specsignal-tier__cta" type="button">Записаться на курс</button>
          </article>

          <article class="specsignal-tier">
            <header class="specsignal-tier__header">
              <p class="specsignal-tier__badge">C</p>
              <h3 class="specsignal-tier__title">Обучение на категорию C</h3>
            </header>
            <p class="specsignal-tier__text">
              Грузовые автомобили свыше 3,5 тонн. Практика — на манёвровой площадке и в условиях города.
            </p>
            <dl class="specsignal-tier__meta">
              <div class="specsignal-tier__row">
                <dt>Срок обучения</dt>
                <dd>до 3 месяцев</dd>
              </div>
              <div class="specsignal-tier__row">
                <dt>Форма обучения</dt>
                <dd>очная / комбинированная</dd>
              </div>
            </dl>
            <p class="specsignal-tier__price">от 40 000 ₽</p>
            <button class="specsignal-tier__cta" type="button">Записаться на курс</button>
          </article>

          <article class="specsignal-tier">
            <header class="specsignal-tier__header">
              <p class="specsignal-tier__badge">D</p>
              <h3 class="specsignal-tier__title">Обучение на категорию D</h3>
            </header>
            <p class="specsignal-tier__text">
              Для автобусов и маршрутных спецавтомобилей. Отрабатываем взаимодействие с пассажирами и диспетчерами.
            </p>
            <dl class="specsignal-tier__meta">
              <div class="specsignal-tier__row">
                <dt>Срок обучения</dt>
                <dd>до 2,5 месяца</dd>
              </div>
              <div class="specsignal-tier__row">
                <dt>Форма обучения</dt>
                <dd>очная / корпоративная</dd>
              </div>
            </dl>
            <p class="specsignal-tier__price">от 40 000 ₽</p>
            <button class="specsignal-tier__cta" type="button">Записаться на курс</button>
          </article>
        </div>

        <nav class="specsignal-tiers__pager" aria-label="Навигация по тарифам">
          <button class="specsignal-tiers__arrow" type="button" aria-label="Предыдущая страница">
            <svg width="18" height="18" viewBox="0 0 18 18" focusable="false" aria-hidden="true">
              <path d="M11.25 3.75l-4.5 4.5 4.5 4.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <p class="specsignal-tiers__pages">
            <span class="specsignal-tiers__current" aria-current="page">1</span>
            <span class="specsignal-tiers__divider">/</span>
            <span class="specsignal-tiers__total">3</span>
          </p>
          <button class="specsignal-tiers__arrow" type="button" aria-label="Следующая страница">
            <svg width="18" height="18" viewBox="0 0 18 18" focusable="false" aria-hidden="true">
              <path d="M6.75 3.75l4.5 4.5-4.5 4.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </nav>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
