<section class="form-section">
  <div class="form-section__container container">
    <div class="form-section__form-wrapper">
      <h2 class="form-section__title">Есть вопрос? Оставьте заявку и мы перезвоним вам</h2>
      <form class="form main-form" action="">
        <label class="form__item">
          <span class="form__label">Ваше имя</span>
          <input type="text" name="client_name" id="client" class="input-reset form__input form__input--name" placeholder="Анна">
          <div class="form__input-success"></div>
        </label>
        <label class="form__item">
          <span class="form__label">Телефон</span>
          <input type="tel" name="client_phone" id="phone" class="input-reset form__input form__input--phone" placeholder="+7 (___)-___-__-__">
          <div class="form__input-success"></div>
        </label>
        <button class="btn-reset button form__button">Отправить</button>
        <label class="custom-checkbox form__checkbox">
          <input type="checkbox" class="custom-checkbox__field">
          <span class="custom-checkbox__content">Нажимая галочку «Согласен» Вы подтверждаете свое согласие на обработку <a href="/">персональных данных</a></span>
        </label>
      </form>
    </div>
    <picture>
      <source srcset="<?= ct()->get_static_url(); ?>/img/form-section/person.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url(); ?>/img/form-section/person.png" class="form-section__person" width="424" height="725" alt="Девушка-медсестра приглашает на проведение обследования">
    </picture>
  </div>
</section>
