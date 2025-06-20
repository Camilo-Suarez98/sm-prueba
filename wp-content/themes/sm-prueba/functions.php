<?php
add_theme_support('post-thumbnails');

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

function registrar_cpt_pilares() {
  register_post_type('pilar', [
    'label' => 'Pilares',
    'public' => true,
    'has_archive' => false,
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-screenoptions'
  ]);
}
add_action('init', 'registrar_cpt_pilares');

function slider_resource() {
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    [],
    null
  );

  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    [],
    null,
    true
  );

  wp_enqueue_script(
    'custom-js',
    get_stylesheet_directory_uri() . '/js/swiper.js',
    ['swiper-js'],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'slider_resource');

function font_family_resource() {
  wp_enqueue_style(
    'google-fonts-montserrat',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
    false
  );

  wp_enqueue_style(
    'mi-tema-style',
    get_stylesheet_uri()
  );
}
add_action('wp_enqueue_scripts', 'font_family_resource');

function add_pilars() {
  $labels = [
    'name' => 'Pilares',
    'singular_name' => 'Pilar',
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => ['slug' => 'pilares'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'show_in_rest' => true,
  ];
  register_post_type('pilar', $args);
}
add_action('init', 'add_pilars');
