<?php
/**
 * Раздел сотрудников на главной
 */
global $post;
$personal_list = get_personal_list();

if(!$personal_list) {
  return;
}
?>
<section class="personal" id="personal">
  <div class="personal__container">
    <div class="personal__header container">
      <h2 class="personal__title section-title">Наши врачи</h2>
      <div class="personal__descr">Прием ведут высококвалифицированные специалисты, врачи с большим опытом лечения,
        диагностики и наблюдения течения заболеваний.</div>
    </div>
    <div class="swiper personal__slider">
      <div class="swiper-wrapper">

        <?php foreach($personal_list as $post): ?>
        <div class="swiper-slide person">
          <div class="person__wrapper">
            <div class="person__img-wrapper">
              <img loading="lazy" src="<?= get_personal_image_src(); ?>" class="person__img"
                width="225" height="300" alt="<?= get_personal_title($post); ?>">
            </div>
            <div class="person__name"><?= get_personal_title($post); ?></div>

            <?php if($descr = get_personal_descr($post)): ?>
              <div class="person__description"><?= $descr ?></div>
            <?php endif; ?>
            <button class="btn-reset button--stroke person__button" data-graph-path="callback" data-modal-service="Запись к врачу: <?= get_personal_title(); ?>">Записаться</button>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
      <div class="personal__slider-nav container">
        <div class="personal__slider-button personal__slider-button--prev">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.7959 16.099C11.5237 16.3707 11.0825 16.3707 10.8103 16.099L3 8.30274L10.8103 0.506485C11.0825 0.234816 11.5237 0.234816 11.7959 0.506485C12.068 0.778155 12.068 1.21862 11.7959 1.49029L4.97115 8.30273L11.7959 15.1152C12.068 15.3869 12.068 15.8273 11.7959 16.099Z"/>
          </svg>

        </div>
        <div class="personal__slider-button personal__slider-button--next">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M4.20412 0.506486C4.47628 0.234817 4.91754 0.234817 5.18969 0.506486L13 8.30273L5.18969 16.099C4.91754 16.3707 4.47628 16.3707 4.20412 16.099C3.93196 15.8273 3.93196 15.3869 4.20412 15.1152L11.0289 8.30273L4.20412 1.49029C3.93196 1.21862 3.93196 0.778155 4.20412 0.506486Z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
