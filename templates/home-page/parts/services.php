<?php
/**
 * Шаблон секции Услуг на главной
*/
global $post;

$service_list = get_service_list();

if(!$service_list) {
  return;
}
?>

<section class="services" id="services">
  <div class="services__container container">
    <h2 class="services__title section-title">Наши услуги:</h2>
    <ul class="services__list service-list list-reset">
      <?php foreach($service_list as $post): ?>
      <li class="service-list__item service">
        <div class="service__name"><?= get_service_title($post) ?></div>
        <button class="btn-reset button service__button" data-graph-path="callback" data-modal-service="<?= get_service_title($post) ?>">Записаться</button>
      </li>
      <?php endforeach; ?>
    </ul>
    <button class="services__show-more btn-reset button--stroke">Показать ещё</button>
  </div>
</section>
