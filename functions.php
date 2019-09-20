<?php
function register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menu' );

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . "/dist/css/main.css", "1.0");
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
