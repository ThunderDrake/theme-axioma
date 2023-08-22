<footer class="footer">
  <div class="footer__container container">
    <div class="footer__top">
      <span class="footer__logo logo--alt">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo--alt.svg" class="logo__image" width="213"
          height="62" alt="Axioma logo">
      </span>
      <div class="footer__info">
        <div class="footer__info-item">
          <svg class="footer__info-icon" width="16" height="16">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#location-icon"></use>
          </svg>
          <span class="footer__info-text">Липецк, ул. И.В. Свиридова, 20, корп. 4</span>
        </div>
        <div class="footer__info-item">
          <svg class="footer__info-icon" width="16" height="16">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#time-icon"></use>
          </svg>
          <span class="footer__info-text">Режим работы: 07:30 – 19:30</span>
        </div>
      </div>
      <nav class="footer__nav nav nav--second">
        <ul class="nav__list list-reset">
          <li class="nav__item">
            <a class="nav__link" href="#services">Услуги</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#personal">Врачи</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#about">О нас</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#reviews">Отзывы</a>
          </li>
        </ul>
      </nav>
      <a href="tel:8800553535" class="button footer__button-call button--stroke">8(800) 55 35 35</a>
      <button class=" btn-reset footer__scroll-top" data-btn-to-top>Наверх</button>
    </div>

    <div class="footer__bottom">
      <div class="footer__copyright">© Все права защищены <?= date('Y') ?></div>
      <a href="#" class="footer__policy">Политика конфиденциальности</a>
      <div class="footer__authors">
        <div class="footer__authors-item">
          <span>designed</span>
          <span><a href="https://vk.com/id275037335">A. Kostromina</a></span>
        </div>
        &
        <div class="footer__authors-item">
          <span>developed</span>
          <span><a href="https://vk.com/thunder_web">T. Krivenkov</a></span>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
ct()->template('parts/modals/callback-form.php');
?>
<?php wp_footer() ?>
</div>
</body>

</html>
