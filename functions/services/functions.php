<?php
/**
 * Возвращает список всех услуг
 *
 * @return void
 */
function get_service_list() {
  $posts = get_posts( [
    'post_type'      => 'service',
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
function get_service_title( $post = null ) {
  return get_the_title( $post );
}
