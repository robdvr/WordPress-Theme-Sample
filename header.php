<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />




<?php wp_head(); ?>
</head>
<body>

<h1><?php bloginfo( 'name' ); ?></h1>
<p><?php bloginfo( 'description' ); ?></p>


<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>