<?php
/**
 * Theme Header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header>
      <a href="<?php echo home_url() ?>" class="logo">Theme test</a>
      <?php wp_nav_menu() ?>
    </header>
  </div>
