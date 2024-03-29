import { validateForms } from '../functions/validate-forms';
import modal from "./modals.js";

const mainFormRules = [
  {
    ruleSelector: '.main-form .form__input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Слишком короткое имя'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.main-form .form__input--phone',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
  {
    ruleSelector: '.custom-checkbox__field',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Согласитесь с обработкой данных!'
      }
    ]
  },
];

const afterForm = () => {
  modal.open('thanks');

  setTimeout(()=>{
    modal.close();
  }, 7000)
};
if(document.querySelector(".main-form")){
validateForms('.main-form', mainFormRules, form_object.url, form_object.nonce, 'form_action', afterForm);
}
