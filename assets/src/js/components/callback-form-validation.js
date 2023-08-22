import { validateForms } from '../functions/validate-forms';
import modal from "./modals.js";

const callbackFormRules = [
  {
    ruleSelector: '.callback-form .form__input--name',
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
    ruleSelector: '.callback-form .form__input--phone',
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
    ruleSelector: '.callback-form .custom-checkbox__field',
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
  modal.close();

  modal.open('thanks');

  setTimeout(()=>{
    modal.close();
  }, 7000)
};

validateForms('.callback-form', callbackFormRules, form_object.url, form_object.nonce, 'form_action', afterForm);
