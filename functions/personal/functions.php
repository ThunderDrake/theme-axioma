<?php
/**
 * Возвращает список всех услуг
 *
 * @return void
 */
function get_personal_list() {
  $posts = get_posts( [
    'post_type'      => 'personal',
    'posts_per_page' => -1,
    'order'          => 'ASC',
  ] );

  return $posts;
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_personal_title( $post = null ) {
  return get_the_title( $post );
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_personal_image_src( $post = null ) {
  $image_id = get_field('personal_image_id', $post);
  $stub_url = ct()->get_static_url() . "/img/personal/personal-stub.png";

   return kama_thumb_src("w=225&h=300&attach_id=$image_id&stub_url=$stub_url");
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_personal_descr( $post = null ) {
  return get_field('personal_description', $post);
}
