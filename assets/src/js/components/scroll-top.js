const btnToTop = document.querySelector('[data-btn-to-top]');

const onClickBtnToTop = (e) => {
  e.preventDefault();

  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  });
};

const initScrollToTop = () => {
  if (!btnToTop) {
    return;
  }

  btnToTop.addEventListener('click', onClickBtnToTop);
};

initScrollToTop();
