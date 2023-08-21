import Swiper from 'swiper/bundle';
const personalSlider = document?.querySelector('.personal__slider');
if (personalSlider) {
  const swiper = new Swiper('.personal__slider', {
    navigation: {
      nextEl: '.personal__slider-button--next',
      prevEl: '.personal__slider-button--prev'
    },
    slidesPerView: 'auto',
    spaceBetween: 30,
    slidesOffsetBefore: Math.max(15, ((document.documentElement.clientWidth - 1110) / 2)),
    slidesOffsetAfter: Math.max(15, ((document.documentElement.clientWidth - 1110) / 2)),
  });

}
