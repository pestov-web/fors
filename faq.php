
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вопросы и ответы — Автошкола Форсаж</title>
  <link rel="preload" as="style" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
  <?php include __DIR__ . "/includes/header-inner.php"; ?>

  <main id="main" tabindex="-1">
    <?php
    $breadcrumbItems = [["title" => "Главная", "url" => "/"], ["title" => "Вопросы и ответы"]];
    include __DIR__ . "/includes/breadcrumbs.php";

    $faqItems = [
      [
        "author" => "Аня",
        "question" =>
          "Здравствуйте! Подскажите, пожалуйста, могу ли я восстановиться на занятия, если по личным причинам не завершила курс: ни теорию, ни практику (50 часов вождения)? Нужно ли доплачивать и сколько?",
        "expert" => "Юрист",
        "answer" =>
          "Добрый день, всё зависит от срока действия вашего договора. Обратитесь, пожалуйста, в центральный офис на ул. Плехановская, 35, чтобы менеджеры подсказали путь восстановления.",
      ],
      [
        "author" => "Аня",
        "question" =>
          "Здравствуйте! Подскажите, пожалуйста, могу ли я восстановиться на занятия, если по личным причинам не завершила курс: ни теорию, ни практику (50 часов вождения)? Нужно ли доплачивать и сколько?",
        "expert" => "Юрист",
        "answer" =>
          "Здравствуйте! Первым делом проверьте срок договора. Если он ещё действует, мы восстановим вас на ближайший поток. Для уточнения условий подходите в офис на ул. Плехановская, 35.",
      ],
      [
        "author" => "Аня",
        "question" =>
          "Здравствуйте! Подскажите, пожалуйста, могу ли я восстановиться на занятия, если по личным причинам не завершила курс: ни теорию, ни практику (50 часов вождения)? Нужно ли доплачивать и сколько?",
        "expert" => "Юрист",
        "answer" =>
          "Добрый день! Возможность восстановления зависит от того, истёк ли договор и сколько занятий осталось пройти. Подробно расскажем при личном визите в офис на ул. Плехановская, 35.",
      ],
      [
        "author" => "Аня",
        "question" =>
          "Здравствуйте! Подскажите, пожалуйста, могу ли я восстановиться на занятия, если по личным причинам не завершила курс: ни теорию, ни практику (50 часов вождения)? Нужно ли доплачивать и сколько?",
        "expert" => "Юрист",
        "answer" =>
          "Здравствуйте! После проверки договора менеджер предложит возможный график возврата и рассчитает, потребуется ли доплата. Ждём вас в центральном офисе на ул. Плехановская, 35.",
      ],
      [
        "author" => "Аня",
        "question" =>
          "Здравствуйте! Подскажите, пожалуйста, могу ли я восстановиться на занятия, если по личным причинам не завершила курс: ни теорию, ни практику (50 часов вождения)? Нужно ли доплачивать и сколько?",
        "expert" => "Юрист",
        "answer" =>
          "Добрый день! Чаще всего требуется только заявление и согласование новой программы. Приходите в офис на ул. Плехановская, 35 — специалисты помогут оформить восстановление.",
      ],
    ];
    ?>

    <section class="page-section faq" aria-labelledby="faq-title">
      <div class="u-container faq__container">
        <header class="faq__header">
          <h1 class="faq__title" id="faq-title">Вопросы и ответы</h1>
        </header>

        <ul class="faq__list" role="list">
          <?php foreach ($faqItems as $index => $faqItem): ?>
            <?php
            $questionId = "faq-question-" . ($index + 1);
            $answerId = "faq-answer-" . ($index + 1);
            ?>
            <li class="faq__item" role="listitem">
              <article class="faq-card" aria-labelledby="<?php echo $questionId; ?>" aria-describedby="<?php echo $answerId; ?>">
                <header class="faq-card__header">
                  <h2 class="faq-card__author">
                    <?php echo htmlspecialchars($faqItem["author"], ENT_QUOTES, "UTF-8"); ?>
                  </h2>
                  <p class="faq-card__question" id="<?php echo $questionId; ?>">
                    <?php echo htmlspecialchars($faqItem["question"], ENT_QUOTES, "UTF-8"); ?>
                  </p>
                </header>
                <div class="faq-card__divider" aria-hidden="true">
                  <svg width="32" height="28" viewBox="0 0 32 28" focusable="false">
                    <polyline points="4 6 16 18 28 6" fill="none" stroke="#f2d502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></polyline>
                    <polyline points="8 2 16 10 24 2" fill="none" stroke="#f2d502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></polyline>
                    <polyline points="0 10 16 26 32 10" fill="none" stroke="#f2d502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></polyline>
                  </svg>
                </div>
                <footer class="faq-card__footer">
                  <p class="faq-card__expert">
                    <?php echo htmlspecialchars($faqItem["expert"], ENT_QUOTES, "UTF-8"); ?>
                  </p>
                  <p class="faq-card__answer" id="<?php echo $answerId; ?>">
                    <?php echo htmlspecialchars($faqItem["answer"], ENT_QUOTES, "UTF-8"); ?>
                  </p>
                </footer>
              </article>
            </li>
          <?php endforeach; ?>
        </ul>

        <nav class="faq-pagination" aria-label="Навигация по страницам вопросов">
          <ul class="faq-pagination__list" role="list">
            <li class="faq-pagination__item">
              <a class="faq-pagination__link faq-pagination__link--control" href="?page=1" aria-label="Предыдущая страница">
                <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                  <path d="M12.707 4.293a1 1 0 010 1.414L8.414 10l4.293 4.293a1 1 0 01-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 0z" fill="currentColor"/>
                </svg>
              </a>
            </li>
            <li class="faq-pagination__item">
              <a class="faq-pagination__link" href="?page=1">1</a>
            </li>
            <li class="faq-pagination__item">
              <a class="faq-pagination__link faq-pagination__link--current" href="?page=2" aria-current="page">2</a>
            </li>
            <li class="faq-pagination__item">
              <a class="faq-pagination__link" href="?page=3">3</a>
            </li>
            <li class="faq-pagination__item">
              <span class="faq-pagination__ellipsis" aria-hidden="true">…</span>
            </li>
            <li class="faq-pagination__item">
              <a class="faq-pagination__link" href="?page=5">5</a>
            </li>
            <li class="faq-pagination__item">
              <a class="faq-pagination__link faq-pagination__link--control" href="?page=3" aria-label="Следующая страница">
                <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                  <path d="M7.293 4.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L11.586 10 7.293 5.707a1 1 0 010-1.414z" fill="currentColor"/>
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
  </main>

  <?php include __DIR__ . "/includes/footer.php"; ?>

  <script defer src="assets/js/app.js"></script>
</body>
</html>
