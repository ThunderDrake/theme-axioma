<?php
add_action( 'wp_ajax_form_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_form_action', 'ajax_action_callback' );
/**
 * Обработка скрипта
 *
 * @see https://wpruse.ru/?p=3224
 */
function ajax_action_callback() {

	// Массив ошибок
	$err_message = array();

	// Проверяем nonce. Если проверкане прошла, то блокируем отправку
	if ( ! wp_verify_nonce( $_POST['nonce'], 'form-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
  if($_POST['question']) {
    if ( empty( $_POST['question'] ) || ! isset( $_POST['question'] ) ) {
      $err_message['question'] = 'Пожалуйста, введите ваш вопрос.';
    } else {
      $form_question = sanitize_text_field( $_POST['question'] );
    }
  }

	if ( empty( $_POST['client_name'] ) || ! isset( $_POST['client_name'] ) ) {
		$err_message['client_name'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$form_name = sanitize_text_field( $_POST['client_name'] );
	}

	if ( empty( $_POST['client_phone'] ) || ! isset( $_POST['client_phone'] ) ) {
		$err_message['client_phone'] = 'Пожалуйста, введите ваш телефон.';
	} else {
		$form_phone = sanitize_text_field( $_POST['client_phone'] );
	}
  if($_POST['client_service']){
    if ( empty( $_POST['client_service'] ) || ! isset( $_POST['client_service'] ) ) {
      $err_message['client_service'] = 'Пожалуйста, укажите услугу';
    } else {
      $form_service = sanitize_text_field( $_POST['client_service'] );
    }
  }
	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		// Указываем адресата
		$email_to = '';

    if(!$email_to) {
      $email_to = get_option('admin_email');
    }

    if ( empty( $_POST['question'] ) || ! isset( $_POST['question'] ) ) {
      $body    = "Имя: $form_name \nТелефон для связи: $form_phone \n\nПосетитель оставил заявку на услугу: $form_service";
    } else{
      $body    = "Имя: $form_name \nТелефон для связи: $form_phone
      \n\n Вопрос: $form_question";
    }

		$headers = 'From: ' . $form_name . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;

		// Отправляем письмо
		wp_mail( $email_to, 'Заявка с сайта Axioma', $body, $headers );

		// Отправляем сообщение об успешной отправке
		$message_success = 'Собщение отправлено. В ближайшее время я свяжусь с вами.';
		wp_send_json_success( $message_success );
	}

	// На всякий случай убиваем еще раз процесс ajax
	wp_die();

}

