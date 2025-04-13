<?php
function my_theme_assets()
{
  // CSS
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho&display=swap', [], null);
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', [], null);

  // JS
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', [], null, true);
  wp_enqueue_script('scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', ['gsap'], null, true);
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
  wp_enqueue_script('gsap-custom', get_template_directory_uri() . '/js/gsap.js', ['gsap'], null, true);
  wp_enqueue_script('nav', get_template_directory_uri() . '/js/nav.js', [], null, true);
  wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/hamburger.js', [], null, true);
  wp_enqueue_script('feature', get_template_directory_uri() . '/js/feature.js', [], null, true);
  wp_enqueue_script('swipper', get_template_directory_uri() . '/js/swipper.js', ['swiper'], null, true);
  if (is_front_page() || is_page()) {
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, true);
  }
}
add_action('wp_enqueue_scripts', 'my_theme_assets');


function register_custom_post_type_products()
{
  register_post_type(
    'products',
    [
      'labels' => [
        'name' => '商品',
        'singular_name' => '商品',
      ],
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-cart',
      'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
      'rewrite' => ['slug' => 'products'], // URLのベース
      'taxonomies' => ['category'],
    ]
  );
}
add_action('init', 'register_custom_post_type_products');

add_theme_support('title-tag');



function include_products_in_category($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'products'));

    $query->set('posts_per_page', 9);
  }
  return $query;
}
add_action('pre_get_posts', 'include_products_in_category');

