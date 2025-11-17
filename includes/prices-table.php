<?php
// Таблица цен с табами по категориям
?>
<section class="page-section price-courses" aria-labelledby="price-categories-title">
  <div class="u-container">
    <h2 class="u-visually-hidden" id="price-categories-title">Категории курсов и стоимость обучения</h2>
    <div class="price-tabs js-price-tabs" data-price-tabs>
      <nav class="price-tabs__nav" role="tablist" aria-label="Категории курсов">
        <button class="price-tabs__trigger price-tabs__trigger--active js-price-tab"
                type="button"
                role="tab"
                aria-selected="true"
                aria-controls="price-tab-a"
                id="price-tab-a-trigger"
                tabindex="0"
                data-price-tab="price-tab-a">
          Категория A, A1
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-b"
                id="price-tab-b-trigger"
                tabindex="-1"
                data-price-tab="price-tab-b">
          Категория B
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-quad"
                id="price-tab-quad-trigger"
                tabindex="-1"
                data-price-tab="price-tab-quad">
          Квадроциклы
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-c"
                id="price-tab-c-trigger"
                tabindex="-1"
                data-price-tab="price-tab-c">
          Категории C, C1
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-d"
                id="price-tab-d-trigger"
                tabindex="-1"
                data-price-tab="price-tab-d">
          Категория D, D1
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-m"
                id="price-tab-m-trigger"
                tabindex="-1"
                data-price-tab="price-tab-m">
          Категория M
        </button>
        <button class="price-tabs__trigger js-price-tab"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="price-tab-e"
                id="price-tab-e-trigger"
                tabindex="-1"
                data-price-tab="price-tab-e">
          Категория E
        </button>
      </nav>

      <div class="price-tabs__panels">
        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-a"
             aria-labelledby="price-tab-a-trigger">
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категории A и A1</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/moto-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория A</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">12&nbsp;500&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">400&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">104 часа включены</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/moto-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория A1</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">11&nbsp;200&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">380&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">96 часов включены</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-b"
             aria-labelledby="price-tab-b-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категории B</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/car-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория B (МКПП)</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">15&nbsp;990&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">450&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">130 часов входят в стоимость</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/car_auto.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория B (АКПП)</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">17&nbsp;990&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">500&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">130 часов входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-quad"
             aria-labelledby="price-tab-quad-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы для квадроциклов</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/autodrom.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Квадроциклы (UTV)</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">13&nbsp;400&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">420&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">90 часов входят в стоимость</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/autodrom.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Квадроциклы (ATV)</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">12&nbsp;900&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">400&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">90 часов входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-c"
             aria-labelledby="price-tab-c-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категорий C и C1</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/truck-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория C</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">24&nbsp;500&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">600&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">150 часов входят в стоимость</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/truck-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория C1</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">21&nbsp;900&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">560&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">140 часов входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-d"
             aria-labelledby="price-tab-d-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категорий D и D1</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/bus-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория D</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">28&nbsp;700&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">680&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">180 часов входят в стоимость</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/bus-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория D1</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">25&nbsp;900&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">640&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">160 часов входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-m"
             aria-labelledby="price-tab-m-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категории M</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/moto-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория M</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">9&nbsp;700&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">350&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">72 часа входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="price-tabs__panel js-price-panel"
             role="tabpanel"
             id="price-tab-e"
             aria-labelledby="price-tab-e-trigger"
             hidden>
          <div class="fast-pricing__table-wrapper fast-pricing__table-wrapper--responsive">
            <table class="fast-pricing__table fast-pricing__table--responsive">
              <caption class="u-visually-hidden">Курсы категории E</caption>
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
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/truck-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория E</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">18&nbsp;900&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">520&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">110 часов входят в стоимость</td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="pricing-course">
                      <span class="pricing-course__icon" aria-hidden="true">
                        <img src="assets/icons/courses/truck-table.svg" alt="" width="28" height="28" loading="lazy" decoding="async">
                      </span>
                      <span class="pricing-course__name">Категория BE</span>
                    </span>
                  </th>
                  <td class="fast-pricing__cell fast-pricing__cell--price" data-label="Стоимость"><span class="pricing-cost">19&nbsp;700&nbsp;₽</span></td>
                  <td class="fast-pricing__cell fast-pricing__cell--driving" data-label="Вождение">520&nbsp;₽/час вождения</td>
                  <td class="fast-pricing__cell fast-pricing__cell--theory" data-label="Теория">110 часов входят в стоимость</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
