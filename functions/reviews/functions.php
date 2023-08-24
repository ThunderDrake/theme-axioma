<?php
/**
 * Возвращает список всех услуг
 *
 * @return void
 */
function get_review_list() {
  $posts = get_posts( [
    'post_type'      => 'review',
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
function get_review_title( $post = null ) {
  return get_the_title( $post );
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_review_image_src( $post = null ) {
  $image_id = get_field('review_image_id', $post);
  $stub_url = ct()->get_static_url() . "/img/review/review-empty.svg";

   return kama_thumb_src("w=40&h=40&attach_id=$image_id&stub_url=$stub_url");
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_review_like( $post = null ) {
  return get_field('review_like', $post) ?: "";
}

/**
 * Возвращает заголовок услуги
 *
 * @param int|WP_Post|null $post
 * @return void
 */
function get_review_text( $post = null ) {
  return get_field('review_text', $post) ?: "";
}
