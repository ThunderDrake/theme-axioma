if(window.matchMedia('(max-width: 650px)').matches) {
  const serviceList = document.querySelector('.services__list');
  const showMoreBtn = document.querySelector('.services__show-more');
  const itemLength = serviceList.querySelectorAll('.service-list__item').length;
  const array = Array.from(serviceList.children);
  let showItem = 10;

  showMoreBtn.addEventListener('click', (e) => {
    e.preventDefault;
    showItem += showItem;
    const visItems = array.slice(0, showItem);

    visItems.forEach(el => el.classList.add('is-visible'));

    if(visItems.length >= itemLength) {
      showMoreBtn.style.display = 'none'
    }
  });
}
