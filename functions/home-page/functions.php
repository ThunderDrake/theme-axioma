<?php

add_filter( 'template_include', function ( $template ) {
  return is_front_page() ? locate_template( '/templates/home-page/home-page.php' ) : $template;
}, 99 );

if ( function_exists( 'acf_add_options_page' ) ) {

  acf_add_options_page( array(
    'page_title' => 'Управление сайтом',
    'menu_title' => 'Управление сайтом',
    'menu_slug'  => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect'   => false,
    'position'   => 2
  ) );

}

class Contacts {

	public static function get_main_phone() {
		return [
			'raw' => get_field('main_phone', 'option'),
			'formated' => cth()->format_phone(get_field('main_phone', 'option')),
		];
	}

	public static function get_work_time() {
		return get_field('main_work_time', 'option');
	}

	public static function get_address() {
		return get_field('main_address', 'option');
	}
}

function get_main_title() {
  return get_field('main_title', 'option');
}

function get_main_first_subtitle() {
  return get_field('main_subtitle_first', 'option');
}

function get_main_second_subtitle() {
  return get_field('main_subtitle_second', 'option');
}
