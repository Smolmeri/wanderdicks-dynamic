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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/index.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/single.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/mission.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/team.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:300,400,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-151168695-1', 'auto');
        ga('send', 'pageview');
        ga('send', 'event');
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
                <a href="home" onclick="ga('send', 'event' , 'NavigationMenu' , 'Clicked' , 'HomePage' );">
                    <li>Home</li>
                </a>
                <a href="projects" onclick="ga('send', 'event' , 'NavigationMenu' , 'Clicked' , 'ProjectsPage' );">
                    <li>Projects</li>
                </a>
                <a href="blog" onclick="ga('send', 'event' , 'NavigationMenu' , 'Clicked' , 'BlogPage' );">
                    <li>Stories</li>
                </a>
                <a href="team" onclick="ga('send', 'event' , 'NavigationMenu' , 'Clicked' , 'TeamPage' );">
                    <li>Meet the Team</li>
                </a>

                <a target="_blank" href="https://www.instagram.com/wanderdicks/?hl=fi" onclick="ga('send', 'event' , 'Icons' , 'Clicked' , 'Instagram' );">
                    <li>
                        <i class="fab fa-instagram fa-3x"></i>
                    </li>
                </a>
            </ul>
        </div>