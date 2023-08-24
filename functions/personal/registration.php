<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'personal', [
		'labels'           => [
			'name'               => 'Сотрудники',
			'singular_name'      => 'Сотрудники',
			'name_admin_bar'     => 'Сотрудники',
			'menu_name'          => 'Сотрудники',
			'add_new'            => 'Добавить сотрудника',
			'add_new_item'       => 'Добавить нового сотрудника',
			'edit_item'          => 'Редактировать сотрудника',
			'new_item'           => 'Новый сотрудник',
			'view_item'          => 'Посмотреть сотрудника',
			'search_items'       => 'Найти сотрудника',
			'not_found'          => 'Сотрудников не найдено',
			'not_found_in_trash' => 'В корзине сотрудников не найдено',
			'title_placeholder'  => 'Введите ФИО сотрудника',
		],
		'public'           => true,
    'publicly_queryable'  => false,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'hierarchical'     => false,
		'menu_position'    => 8,
		'menu_icon'        => 'dashicons-groups',
		'supports'         => [ 'title' ],
		'posts_per_page'   => -1,
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
