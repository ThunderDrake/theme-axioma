<?php
ct()->header();
?>
<section class="page-404">
  <div class="page-404__container container">
    <div class="page-404__content">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/404.svg" class="page-404__image" width="650" height="240" alt="">
      <h1 class="page-404__title">Ой! Такой страницы нет</h1>
      <a class="button page-404__button" href="/">На главную</a>
    </div>
  </div>
</section>
<?php
ct()->footer();
?>
