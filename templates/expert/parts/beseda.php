<section class="beseda hero">
  <div class="container beseda__container">
    <div class="form-section__form-wrapper beseda__form-wr">
      <h2 class="form-section__title">
        Запрос на проведение беседы
      </h2>
      <form id="expert-form" class="form expert-form" action="" novalidate="novalidate">
        <div class="form__row">
        <label class="form__item ">
          <span class="form__label">Ваше имя</span>
          <input type="text" name="client_name" id="client" class="input-reset form__input form__input--name" placeholder="Анна">
          <div class="form__input-success"></div>
        </label>
        <label class="form__item">
          <span class="form__label">Телефон</span>
          <input type="tel" name="client_phone" id="phone" class="input-reset form__input form__input--phone" placeholder="+7 (___)-___-__-__" inputmode="text">
          <div class="form__input-success"></div>
        </label>
        </div>
        <label class="form__item form__item--100">
          <span class="form__label">Ваш вопрос специалисту</span>
          <textarea for="expert-form" rows="2" name="question" id="question" class="input-reset form__input form__input--question" placeholder="Вопросы могут касаться особенностей определенных заболеваний и профилактики"></textarea>
          <div class="form__input-success"></div>
        </label>
        <button class="btn-reset button form__button">Отправить</button>
        <label class="custom-checkbox form__checkbox">
          <input type="checkbox" class="custom-checkbox__field">
          <span class="custom-checkbox__content">Нажимая галочку «Согласен» Вы подтверждаете свое согласие на обработку <a href="<?= get_the_privacy_policy_link() ?>">персональных данных</a> и <a href="/offering/">офертой</a></span>
        </label>
      </form>
    </div>
  </div>
</section>
