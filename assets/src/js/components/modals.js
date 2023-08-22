import GraphModal from 'graph-modal';
const modal = new GraphModal();

const modalButtons = document.querySelectorAll('[data-graph-path="callback"]');

modalButtons.forEach(el=>{
  el.addEventListener('click', (e)=>{
    const target = e.target;
    const serviceTitle = target?.dataset?.modalService;
    const servicePlaceholder = document.querySelector('.callback-modal__service');
    const serviceInput = document.querySelector('.form__input--service');

    if(serviceTitle) {
      servicePlaceholder.innerText = serviceTitle;
      serviceInput.value = serviceTitle;
    }
  })
});

export default modal;
