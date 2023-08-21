import Swiper from 'swiper/bundle';
const reviewsSlider = document?.querySelector('.reviews__slider');
if (reviewsSlider) {
  const swiper = new Swiper('.reviews__slider', {
    navigation: {
      nextEl: '.reviews__slider-button--next',
      prevEl: '.reviews__slider-button--prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        autoHeight: true
      },
      769: {
        slidesPerView: 'auto',
        slidesOffsetBefore: Math.max(15, ((document.documentElement.clientWidth - 1110) / 2)),
        slidesOffsetAfter: Math.max(15, ((document.documentElement.clientWidth - 1110) / 2)),
      }
    },
    spaceBetween: 30,
  });

}
