<?php
$pageTitle = "Автодром — Автошкола Форсаж"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8"); ?></title>
  <link rel="preload" as="style" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
  <?php include __DIR__ . "/includes/header-inner.php"; ?>

  <main id="main" tabindex="-1">
    <?php
    $breadcrumbItems = [["title" => "Главная", "url" => "/"], ["title" => "Автодром"]];
    include __DIR__ . "/includes/breadcrumbs.php";
    ?>

    <section class="page-section autodrome-intro" aria-labelledby="autodrome-title">
      <div class="u-container autodrome-intro__inner">
        <header class="autodrome-intro__heading">
          <h1 class="autodrome-intro__title" id="autodrome-title">Автодром</h1>
        </header>

        <div class="autodrome-intro__content">
          <div class="autodrome-intro__card">
            <div class="autodrome-intro__text">
              <p class="autodrome-intro__description">
                Автошкола «Форсаж» проводит обучение и контраварийную подготовку на собственном оборудованном автодроме.
                Площадка расположена так, чтобы курсантам было удобно приезжать на тренировки и готовиться к экзамену.
              </p>
              <p class="autodrome-intro__description">
                Площадка полностью повторяет экзаменационные элементы, что позволяет уверенно закрепить манёвры, прежде
                чем выходить на дороги города вместе с инструктором.
              </p>
            </div>

            <ul class="autodrome-intro__list">
              <li class="autodrome-intro__item">
                <span class="autodrome-intro__icon" aria-hidden="true">
                  <img src="assets/icons/map.svg" alt="" width="32" height="32" decoding="async">
                </span>
                <div class="autodrome-intro__item-content">
                  <p class="autodrome-intro__item-label">Учебная площадка:</p>
                  <address class="autodrome-intro__address">
                    ул. Антонова-Овсеенко, 22Б
                    <span class="autodrome-intro__hint">(авторынок, остановка «Переезд»)</span>
                  </address>
                </div>
              </li>
              <li class="autodrome-intro__item">
                <span class="autodrome-intro__icon" aria-hidden="true">
                  <img src="assets/icons/map.svg" alt="" width="32" height="32" decoding="async">
                </span>
                <div class="autodrome-intro__item-content">
                  <p class="autodrome-intro__item-label">Площадка ГИБДД для экзамена:</p>
                  <address class="autodrome-intro__address">
                    ул. Обручева, 3
                    <span class="autodrome-intro__hint">(Левобережный район)</span>
                  </address>
                </div>
              </li>
            </ul>
          </div>

          <figure class="autodrome-intro__media">
            <picture>
              <source type="image/avif" srcset="assets/img/top_car.avif">
              <source type="image/webp" srcset="assets/img/top_car.webp">
              <img
                src="assets/img/top_car.png"
                alt="Автомобиль автошколы «Форсаж» на площадке автодрома"
                width="646"
                height="382"
                decoding="async">
            </picture>
          </figure>
        </div>
      </div>
    </section>

    <section class="page-section autodrome-features" aria-labelledby="autodrome-features-title">
      <div class="u-container autodrome-features__inner">
        <header class="autodrome-features__header">
          <h2 class="autodrome-features__title" id="autodrome-features-title">Особенности</h2>
        </header>

        <div class="autodrome-features__content">
          <article class="autodrome-features__text">
            <p>
              На подготовительном этапе курсанты отрабатывают все упражнения, требуемые для получения водительского
              удостоверения. Инструкторы помогают контролировать скорость манёвров, точность действий и работу с
              педалями, чтобы вы уверенно чувствовали автомобиль в любых условиях.
            </p>
            <p>
              После каждой тренировки мы анализируем ошибки и закрепляем правильные алгоритмы. Когда навыки доведены до
              автоматизма на закрытой площадке, учащиеся переходят к занятиям в городе, где продолжают практику под
              присмотром наставника.
            </p>
          </article>

          <article class="autodrome-features__text">
            <p>
              Автодром оборудован разметкой и элементами, полностью повторяющими экзаменационные задания. Закрытая
              территория позволяет безопасно отработать сложные манёвры и подготовиться к реальным дорожным ситуациям.
            </p>
            <p>
              Для каждого упражнения предусмотрено несколько вариаций, а освещение площадки помогает тренироваться в
              тёмное время суток. Это даёт ученикам реальную практику и уверенность перед экзаменом в ГИБДД.
            </p>
          </article>
        </div>

        <section class="autodrome-exercises" aria-labelledby="autodrome-exercises-title">
          <h3 class="autodrome-exercises__title" id="autodrome-exercises-title">Основные упражнения на полигоне:</h3>
          <ul class="autodrome-exercises__list">
            <li class="autodrome-exercise">
              <span class="autodrome-exercise__icon" aria-hidden="true">
                <img src="assets/icons/autodrome/parallel-parking.svg" alt="" width="56" height="56" decoding="async">
              </span>
              <span class="autodrome-exercise__label">Параллельная парковка</span>
            </li>
            <li class="autodrome-exercise">
              <span class="autodrome-exercise__icon" aria-hidden="true">
                <img src="assets/icons/autodrome/hill-start.svg" alt="" width="56" height="56" decoding="async">
              </span>
              <span class="autodrome-exercise__label">Трогание на подъёме</span>
            </li>
            <li class="autodrome-exercise">
              <span class="autodrome-exercise__icon" aria-hidden="true">
                <img src="assets/icons/autodrome/garage-entry.svg" alt="" width="56" height="56" decoding="async">
              </span>
              <span class="autodrome-exercise__label">Въезд в бокс</span>
            </li>
            <li class="autodrome-exercise">
              <span class="autodrome-exercise__icon" aria-hidden="true">
                <img src="assets/icons/autodrome/turnaround.svg" alt="" width="56" height="56" decoding="async">
              </span>
              <span class="autodrome-exercise__label">Разворот в ограниченном пространстве</span>
            </li>
            <li class="autodrome-exercise">
              <span class="autodrome-exercise__icon" aria-hidden="true">
                <img src="assets/icons/autodrome/slalom.svg" alt="" width="56" height="56" decoding="async">
              </span>
              <span class="autodrome-exercise__label">«Змейка»</span>
            </li>
          </ul>
        </section>
      </div>
    </section>

    <section class="page-section autodrome-gallery" aria-labelledby="autodrome-gallery-title">
      <div class="u-container autodrome-gallery__inner">
        <h2 class="autodrome-gallery__title" id="autodrome-gallery-title">Галерея</h2>
        <div class="autodrome-gallery__grid">
          <figure class="autodrome-gallery__item autodrome-gallery__item--thumb">
            <picture>
              <source type="image/avif" srcset="assets/img/autodrome/gallery-1.avif">
              <source type="image/webp" srcset="assets/img/autodrome/gallery-1.webp">
              <img
                src="assets/img/autodrome/gallery-1.png"
                alt="Учебный автомобиль на площадке автодрома"
                width="315"
                height="192"
                loading="lazy"
                decoding="async">
            </picture>
            <figcaption class="u-visually-hidden">Учебный автомобиль на площадке автодрома</figcaption>
          </figure>

          <figure class="autodrome-gallery__item autodrome-gallery__item--main">
            <picture>
              <source type="image/avif" srcset="assets/img/autodrome/gallery-2.avif">
              <source type="image/webp" srcset="assets/img/autodrome/gallery-2.webp">
              <img
                src="assets/img/autodrome/gallery-2.png"
                alt="Практическое занятие с инструктором"
                width="315"
                height="192"
                loading="lazy"
                decoding="async">
            </picture>
            <figcaption class="u-visually-hidden">Практическое занятие с инструктором</figcaption>
          </figure>

          <figure class="autodrome-gallery__item autodrome-gallery__item--thumb">
            <picture>
              <source type="image/avif" srcset="assets/img/autodrome/gallery-3.avif">
              <source type="image/webp" srcset="assets/img/autodrome/gallery-3.webp">
              <img
                src="assets/img/autodrome/gallery-3.png"
                alt="Группа курсантов на тренировке"
                width="315"
                height="192"
                loading="lazy"
                decoding="async">
            </picture>
            <figcaption class="u-visually-hidden">Группа курсантов на тренировке</figcaption>
          </figure>
        </div>
        <p class="autodrome-gallery__status" aria-hidden="true">
          <span class="autodrome-gallery__status-current">1</span>
          <span class="autodrome-gallery__status-divider">/</span>
          <span class="autodrome-gallery__status-total">3</span>
        </p>
      </div>
    </section>

    <section class="page-section autodrome-benefits" aria-labelledby="autodrome-benefits-title">
      <div class="u-container autodrome-benefits__inner">
        <h2 class="autodrome-benefits__title" id="autodrome-benefits-title">
          Преимущества занятий на нашем автодроме
        </h2>

        <div class="autodrome-benefits__grid">
          <article class="autodrome-benefit autodrome-benefit--light">
            <div class="autodrome-benefit__icon" aria-hidden="true">
              <img src="assets/icons/contacts/info.svg" alt="" width="40" height="40" decoding="async">
            </div>
            <h3 class="autodrome-benefit__heading">Грамотная подготовка</h3>
            <p class="autodrome-benefit__description">
              Курсанты выходят на город только после уверенной теории и практики на площадке. Мы закрепляем
              последовательность действий, чтобы каждый манёвр выполнялся автоматически.
            </p>
          </article>

          <article class="autodrome-benefit autodrome-benefit--contrast">
            <div class="autodrome-benefit__icon" aria-hidden="true">
              <img src="assets/icons/courses/car-table.svg" alt="" width="40" height="40" decoding="async">
            </div>
            <h3 class="autodrome-benefit__heading">Обширный автопарк</h3>
            <p class="autodrome-benefit__description">
              Более 50 автомобилей 2020–2024 годов выпуска позволяют планировать занятия без ожиданий и подбирать
              подходящую трансмиссию.
            </p>
          </article>

          <figure class="autodrome-benefit autodrome-benefit--photo">
            <picture>
              <source type="image/avif" srcset="assets/img/autodrome/benefit-photo.avif">
              <source type="image/webp" srcset="assets/img/autodrome/benefit-photo.webp">
              <img
                src="assets/img/autodrome/benefit-photo.png"
                alt="Ученики автошколы «Форсаж» на площадке"
                width="315"
                height="192"
                loading="lazy"
                decoding="async">
            </picture>
            <figcaption class="u-visually-hidden">Ученики автошколы «Форсаж» на площадке</figcaption>
          </figure>

          <article class="autodrome-benefit autodrome-benefit--muted">
            <div class="autodrome-benefit__icon" aria-hidden="true">
              <img src="assets/icons/map.svg" alt="" width="40" height="40" decoding="async">
            </div>
            <h3 class="autodrome-benefit__heading">Удобное расположение филиалов</h3>
            <p class="autodrome-benefit__description">
              Наши классы находятся во всех районах города, поэтому вы можете выбирать площадку и теорию рядом с домом
              или работой.
            </p>
          </article>

          <article class="autodrome-benefit autodrome-benefit--accent">
            <div class="autodrome-benefit__icon" aria-hidden="true">
              <img src="assets/icons/online.svg" alt="" width="40" height="40" decoding="async">
            </div>
            <h3 class="autodrome-benefit__heading">Профессиональные инструкторы</h3>
            <p class="autodrome-benefit__description">
              Опытные наставники сопровождают каждый этап обучения, помогают контролировать эмоции и закрепляют
              безопасные привычки вождения.
            </p>
          </article>
        </div>
      </div>
    </section>

    <section class="page-section autodrome-signup" aria-labelledby="autodrome-signup-title">
      <div class="u-container autodrome-signup__inner">
        <div class="autodrome-signup__content">
          <h2 class="autodrome-signup__title" id="autodrome-signup-title">Как записаться на занятия</h2>
          <p class="autodrome-signup__description">
            Выберите интересующую категорию обучения и позвоните по номеру +7&nbsp;(473)&nbsp;269-00-00 или оформите
            заявку онлайн. Специалист автошколы свяжется с вами, чтобы подтвердить график и ответить на вопросы.
          </p>
        </div>

        <!-- bx:form-consult -->
        <form class="autodrome-signup__form" action="#" method="post" novalidate>
          <div class="autodrome-signup__fields">
            <div class="autodrome-signup__field">
              <label class="autodrome-signup__label u-visually-hidden" for="autodrome-name">Ваше имя</label>
              <input
                class="autodrome-signup__input"
                type="text"
                id="autodrome-name"
                name="name"
                placeholder="Ваше имя"
                autocomplete="name"
                required>
            </div>
            <div class="autodrome-signup__field">
              <label class="autodrome-signup__label u-visually-hidden" for="autodrome-phone">Ваш номер телефона</label>
              <input
                class="autodrome-signup__input"
                type="tel"
                id="autodrome-phone"
                name="phone"
                placeholder="Ваш номер телефона"
                inputmode="tel"
                autocomplete="tel"
                required>
            </div>
          </div>

          <p class="autodrome-signup__notice">
            Отправляя заявку, вы соглашаетесь на обработку персональных данных.
          </p>

          <button class="autodrome-signup__submit" type="submit">Оставить заявку</button>
        </form>
      </div>
    </section>
  </main>

  <?php include __DIR__ . "/includes/footer.php"; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
