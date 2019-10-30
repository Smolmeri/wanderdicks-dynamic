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

// Custom Fields

$white_logo = get_field('white_logo');


?>
<!doctype html>
<html class="html" <?php language_attributes();  ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N8JCHSC');
    </script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/index.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/single.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/mission.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/team.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:300,400,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151168695-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-151168695-1');
    </script>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8JCHSC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'wanderdicks'); ?></a> -->
        <div class="nav-wrapper"></div>
        <div class="nav-container" onclick="onNavPress()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>


        <div class="nav-list">
            <a href="home"><img style="width: 225px; height: 200px;" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/wanderdicks_white.png"></a>
            <ul>
                <a href="home" onclick=ga(‘send’, ‘event’, [NavigationMenu], [Clicked], [HomePage]);>
                    <li>Home</li>
                </a>
                <a href="projects" onclick=ga(‘send’, ‘event’, [NavigationMenu], [Clicked], [ProjectsPage]);>
                    <li>Projects</li>
                </a>
                <a href="blog"  onclick=ga(‘send’, ‘event’, [NavigationMenu], [Clicked], [BlogPage]);>
                    <li>Stories</li>
                </a>
                <a href="team"  onclick=ga(‘send’, ‘event’, [NavigationMenu], [Clicked], [TeamPage]);>
                    <li>Meet the Team</li>
                </a>

                <a target="_blank" href="https://www.instagram.com/wanderdicks/?hl=fi"  onclick=ga(‘send’, ‘event’, [Icons], [Clicked], [Instagram]);>
                    <li>
                        <i class="fab fa-instagram fa-3x"></i>
                    </li>
                </a>
            </ul>
        </div>