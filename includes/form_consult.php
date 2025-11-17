<?php
// Форма консультации, подготовлена для подключения на страницах сайта
?>
<section class="consult" aria-labelledby="consult-title">
  <div class="consult__inner u-container">
    <div class="consult__content">
      <header class="consult__header">
        <h2 class="consult__title" id="consult-title">Получи консультацию прямо сейчас!</h2>
        <p class="consult__subtitle">В течение 10 минут с вами свяжется наш специалист.</p>
      </header>

      <!-- bx:form-consult -->
      <form class="consult__form" action="#" method="post" novalidate>
        <div class="consult__fields">
          <div class="consult__field">
            <label class="consult__label u-visually-hidden" for="consult-name">Ваше имя</label>
            <input class="consult__input"
                   type="text"
                   id="consult-name"
                   name="name"
                   placeholder="Ваше имя"
                   autocomplete="name"
                   required>
          </div>
          <div class="consult__field">
            <label class="consult__label u-visually-hidden" for="consult-phone">Ваш номер телефона</label>
            <input class="consult__input"
                   type="tel"
                   id="consult-phone"
                   name="phone"
                   placeholder="Ваш номер телефона"
                   inputmode="tel"
                   autocomplete="tel"
                   required>
          </div>
        </div>

        <p class="consult__notice">
          Отправляя заявку вы соглашаетесь на обработку персональных данных.
        </p>

        <button class="consult__submit" type="submit">
          Оставить заявку
        </button>
      </form>
    </div>
  </div>
</section>
