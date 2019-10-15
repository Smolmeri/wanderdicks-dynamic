<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wanderdicks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/index.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/single.css">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wanderdicks' ); ?></a> -->

	<div class="nav-container" onclick="onNavPress()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <div class="nav-list">
            <img src="./assets/img/tempLogo.png" alt="asd">
        <ul>
            <a href="./index.html">
                <li>Home</li>
            </a>
            <a href="./mission.html">
                <li>Mission</li>
            </a>
            <a href="blog">
                <li>Adventures</li>
            </a>
            <a href="./team.html">
                <li>Meet the Team</li>
            </a>
        </ul>
    </div>



   
