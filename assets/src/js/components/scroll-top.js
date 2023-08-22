const btnToTop = document.querySelector('[data-btn-to-top]');
const scrollTo = document.querySelector('[scroll-to]');

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

const initScrollToBlock = () => {
  if (!scrollTo) {
    return;
  }

  scrollTo.addEventListener('click', ()=>{
    const element = document.querySelector('.services');

    element.scrollIntoView()
  });
};

initScrollToBlock();
