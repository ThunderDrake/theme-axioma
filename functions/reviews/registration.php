<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'review', [
		'labels'           => [
			'name'               => 'Отзывы',
			'singular_name'      => 'Отзывы',
			'name_admin_bar'     => 'Отзывы',
			'menu_name'          => 'Отзывы',
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          => 'Отзывы не найдены',
			'not_found_in_trash' => 'В корзине отзывов не найдено',
			'title_placeholder'  => 'Введите автора отзыва',
		],
		'public'           => true,
    'publicly_queryable'  => false,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'hierarchical'     => false,
		'menu_position'    => 9,
		'menu_icon'        => 'dashicons-awards',
		'supports'         => [ 'title' ],
		'posts_per_page'   => -1,
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
