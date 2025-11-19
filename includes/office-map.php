<?php
// Блок «карта офисов», подготовлен для подключения на страницах сайта
?>

<div class="office-map">
  <ul class="district-tabs">
    <li class="district-tabs__item">
      <button class="district-tabs__button district-tabs__button_active">У вас дома</button>
    </li>
    <li class="district-tabs__item"><button class="district-tabs__button">Центральный</button></li>
    <li class="district-tabs__item"><button class="district-tabs__button">Левобережный</button></li>
    <li class="district-tabs__item"><button class="district-tabs__button">Коминтерновский</button></li>
    <li class="district-tabs__item"><button class="district-tabs__button">Советский</button></li>
    <li class="district-tabs__item"><button class="district-tabs__button">Железнодорожный</button></li>
  </ul>
  <div class="office-map__wrapper">
    <div class="office-map__content">
      <h4 class="office-map__title">Дистанционное обучение</h4>
      <ul class="office-map__benefits">
        <li class="office-map__benefits-item">Экономия минимум 52 часа на дорогу.</li>
        <li class="office-map__benefits-item">Не придётся тратить деньги на проезд.</li>
        <li class="office-map__benefits-item">Вся теория — онлайн, бесплатно!</li>
        <li class="office-map__benefits-item">Вы не пропустите ни одного занятия.</li>
      </ul>
      <h4 class="office-map__label">Автодромы</h4>
      <ul class="office-map__locations">
        <li class="office-map__locations-item">
          <img src="assets/icons/map.svg" alt="" class="office-map__icon" aria-hidden="true" />
          ул. Обручева, 3
          <span class="office-map__locations-description">(Левобережный р-н)</span>
          <button class="btn btn--secondary btn--small">Построить маршрут</button>
        </li>
        <li class="office-map__locations-item">
          <img src="assets/icons/map.svg" alt="" class="office-map__icon" aria-hidden="true" />
          ул. Антонова-Овсеенко, 22Б
          <span class="office-map__locations-description">(авторынок, остановка Переезд)</span>
          <button class="btn btn--secondary btn--small">Построить маршрут</button>
        </li>
      </ul>
    </div>
    <iframe
      class="office-map__map"
      src="https://yandex.ru/map-widget/v1/?um=constructor%3A0de65d926cb4ed7ff8610dc96b0f710b5b72b28944cdaf3426e1fe0588420c1d&amp;source=constructor"
      width="619"
      height="658"
      frameborder="0"
    ></iframe>
  </div>
</div>
