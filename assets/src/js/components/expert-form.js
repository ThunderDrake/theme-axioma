import { validateForms } from '../functions/validate-forms';
import modal from "./modals.js";

const expertFormRules = [
  {
    ruleSelector: '.expert-form .form__input--name',
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
    ruleSelector: '.expert-form .form__input--phone',
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
    ruleSelector: '.expert-form .custom-checkbox__field',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Согласитесь с обработкой данных!'
      }
    ]
  },
  {
    ruleSelector: '.expert-form .form__input--question',
    rules: [
      {
        rule: 'required',
        value: true,
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
if(document.querySelector(".expert-form")){
  validateForms('.expert-form', expertFormRules, form_object.url, form_object.nonce, 'form_action', afterForm);
}

