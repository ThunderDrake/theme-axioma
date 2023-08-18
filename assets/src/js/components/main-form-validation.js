import { validateForms } from '../functions/validate-forms';

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
  console.log('Произошла отправка, тут можно писать любые действия');
};

validateForms('.main-form', mainFormRules, afterForm);
