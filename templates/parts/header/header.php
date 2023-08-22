<?php
/**
 * Шаблон Header сайта
 */
?>
<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Inter-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Inter-Bold.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Montserrat-Regular.woff2" as="font"
        crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Montserrat-Medium.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Montserrat-SemiBold.woff2" as="font"
        crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Montserrat-Bold.woff2" as="font"
        crossorigin="anonymous">
  <?php wp_head() ?>
</head>
<body class="page__body">
<div class="site-container">

  <header class="header">
    <div class="header__container container">
      <a href="/" class="logo header__logo">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo__image" width="213" height="62" alt="Axioma logo">
      </a>
      <div class="header__info">

        <div class="header__info-item">
          <svg class="header__info-icon" width="16" height="16">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#location-icon"></use>
          </svg>
          <span class="header__info-text">Липецк, ул. И.В. Свиридова, 20, корп. 4</span>
        </div>

        <div class="header__info-item">
          <svg class="header__info-icon" width="16" height="16">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#time-icon"></use>
          </svg>
          <span class="header__info-text">Режим работы: 07:30 – 19:30</span>
        </div>

      </div>

      <nav class="header__nav nav nav--main" data-menu>
        <ul class="nav__list list-reset">
          <li class="nav__item">
            <a class="nav__link" href="#services" data-menu-item>Услуги</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#personal" data-menu-item>Врачи</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#about" data-menu-item>О нас</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#reviews" data-menu-item>Отзывы</a>
          </li>
        </ul>
        <a href="tel:8800553535" class="button header__button-call header__button-call--mobile button--stroke">8(800) 55 35 35</a>
      </nav>

      <a href="tel:8800553535" class="button header__button-call button--stroke">8(800) 55 35 35</a>

      <button class="burger header__burger btn-reset" aria-label="Открыть меню" aria-expanded="false"  data-burger>
        <span class="burger__line"></span>
      </button>
    </div>
  </header>
