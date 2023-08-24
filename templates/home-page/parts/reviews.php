<?php
/**
 * Шаблон раздела отзывов на главной
 */

$reviews = get_review_list();

if(!$reviews) {
  return;
}
?>
<section class="reviews" id="reviews">
  <div class="reviews__container">
    <div class="reviews__header container">
      <h2 class="reviews__title section-title">Отзывы</h2>
      <div class="reviews__slider-nav">
        <div class="reviews__slider-button reviews__slider-button--prev">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.7959 16.099C11.5237 16.3707 11.0825 16.3707 10.8103 16.099L3 8.30274L10.8103 0.506485C11.0825 0.234816 11.5237 0.234816 11.7959 0.506485C12.068 0.778155 12.068 1.21862 11.7959 1.49029L4.97115 8.30273L11.7959 15.1152C12.068 15.3869 12.068 15.8273 11.7959 16.099Z"/>
          </svg>

        </div>
        <div class="reviews__slider-button reviews__slider-button--next">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M4.20412 0.506486C4.47628 0.234817 4.91754 0.234817 5.18969 0.506486L13 8.30273L5.18969 16.099C4.91754 16.3707 4.47628 16.3707 4.20412 16.099C3.93196 15.8273 3.93196 15.3869 4.20412 15.1152L11.0289 8.30273L4.20412 1.49029C3.93196 1.21862 3.93196 0.778155 4.20412 0.506486Z"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="swiper reviews__slider">
      <div class="swiper-wrapper">
        
        <?php foreach($reviews as $review): ?>
        <div class="swiper-slide review">
          <div class="review__wrapper">
            <div class="review__header">
              <div class="review__photo">
                <img loading="lazy" src="<?= get_review_image_src($review) ?>" class="review__img" width="40" height="40" alt="Имя">
              </div>
              <div class="review__title"><?= get_review_title($review); ?></div>
            </div>
            <div class="review__good"><?= get_review_like($review); ?></div>
            <div class="review__descr"><?= get_review_text($review); ?></div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>
