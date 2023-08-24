<div class="graph-modal">
  <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="callback">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content callback-modal">
      <div class="callback-modal__service"></div>
      <div class="callback-modal__title">Оставьте заявку, мы перезвоним вам и запишем на удобное время</div>
      <form class="form callback-form" action="">
        <label class="form__item">
          <span class="form__label">Ваше имя</span>
          <input type="text" name="client_name" id="client" class="input-reset form__input form__input--name"
            placeholder="Анна">
          <div class="form__input-success"></div>
        </label>
        <label class="form__item">
          <span class="form__label">Телефон</span>
          <input type="tel" name="client_phone" id="phone" class="input-reset form__input form__input--phone"
            placeholder="+7 (___)-___-__-__">
          <div class="form__input-success"></div>
        </label>
        <button class="btn-reset button form__button">Отправить</button>
        <label class="custom-checkbox form__checkbox">
          <input type="checkbox" class="custom-checkbox__field">
          <span class="custom-checkbox__content">Нажимая галочку «Согласен» Вы подтверждаете свое согласие на обработку
            <a href="<?= get_privacy_policy_url() ?>">персональных данных</a></span>
        </label>
        <input type="hidden" name="client_service" class="input-reset form__input form__input--service" value="">
      </form>
    </div>
  </div>

  <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="thanks">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content thank-you-modal">
      <div class="graph-modal__content thank-you-modal">
        <div class="thank-you-modal__title">Спасибо за обращение!</div>
        <div class="thank-you-modal__subtitle">Менеджер с вами свяжется в течении 15 минут</div>
      </div>
    </div>
  </div>
</div>
