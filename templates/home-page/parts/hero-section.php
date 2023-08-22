<?php

?>

<section class="hero">
  <div class="hero__container container">
    <picture>
      <source srcset="<?= ct()->get_static_url(); ?>/img/hero/hero-person.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url(); ?>/img/hero/hero-person.png" class="hero__person-img" width="445" height="655" alt="Женщина-медик с планшетом для записи">
    </picture>

    <h1 class="visually-hidden">Аксиома Здоровья - медицинский центр в Липецке, скидки на анализы, записаться на приём к врачу в Липецке</h1>
    <div class="hero__text">
      <h2 class="hero__title">30% скидка на анализы каждый <span>вторник, четверг и&nbsp;воскресенье</span></h2>
      <div class="hero__descr">Скидка действует на все анализы кроме общего анализа крови, общего анализа мочи, Антитела к коронавирусу SARS CoV2 Ig G, М (количественные и качественные).</div>
      <div class="hero__descr hero__descr--green-text">Забор крови оплачивается отдельно. Имеются противопоказания, необходима консультация врача.</div>
      <button class="btn-reset button hero__button" scroll-to="services">Смотреть прайс</button>
    </div>
  </div>
</section>
