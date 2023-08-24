<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'service', [
		'labels'           => [
			'name'               => 'Услуги',
			'singular_name'      => 'Услуги',
			'name_admin_bar'     => 'Услуги',
			'menu_name'          => 'Услуги',
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          => 'Услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'title_placeholder'  => 'Введите название услуги',
		],
		'public'           => true,
    'publicly_queryable'  => false,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'hierarchical'     => false,
		'menu_position'    => 7,
		'menu_icon'        => 'dashicons-welcome-write-blog',
		'supports'         => [ 'title', 'editor' ],
		'posts_per_page'   => -1,
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
