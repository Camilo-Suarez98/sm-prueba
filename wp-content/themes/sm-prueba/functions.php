<?php
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

function slider_plugin_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('mi-custom-js', get_stylesheet_directory_uri() . '/js/custom.js', ['swiper-js'], null, true);
}
add_action('wp_enqueue_scripts', 'slider_plugin_scripts');

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
