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
      <h2 class="hero__title"><?= get_main_title(); ?></h2>
      <?php if($first_subtitle = get_main_first_subtitle()): ?>
        <div class="hero__descr"><?= $first_subtitle ?></div>
      <?php endif; ?>

      <?php if($second_subtitle = get_main_second_subtitle()): ?>
        <div class="hero__descr hero__descr--green-text"><?= $second_subtitle ?></div>
      <?php endif; ?>
      <button class="btn-reset button hero__button" scroll-to="services">Смотреть прайс</button>
    </div>
  </div>
</section>
