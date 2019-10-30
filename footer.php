<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wanderdicks
 */

?>

<?php wp_footer(); ?>

<!-- Footer -->
<div class="footer-container">
    <div class="column-1">
        <ul>
            <li>Wanderdicks</li>
            <li>wanderdicks@gmail.com</li>
        </ul>
    </div>

    <div class="instagram">
        <a target="_blank" href="https://www.instagram.com/wanderdicks/?hl=fi" onclick=ga(‘send’, ‘event’, [Icons], [Clicked], [Instagram]);><i class="fab fa-instagram fa-5x"></i></a>
    </div>


    <!-- <div class="column-2"> -->
        <div class="footer-nav-list">
            <ul>
            <a href="home" onclick=ga(‘send’, ‘event’, [NavigationMenu], [Clicked], [HomePage]);>
                    <li>Home</li>
                </a>
                <a href="projects" onclick=ga(‘send’, ‘event’, [FooterMenu], [Clicked], [ProjectsPage]);>
                    <li>Projects</li>
                </a>
                <a href="blog"  onclick=ga(‘send’, ‘event’, [FooterMenu], [Clicked], [BlogPage]);>
                    <li>Stories</li>
                </a>
                <a href="team"  onclick=ga(‘send’, ‘event’, [FooterMenu], [Clicked], [TeamPage]);>
                    <li>Meet the Team</li>
                </a>
            </ul>
        </div>
    <!-- </div> -->

</div>
<div class="toiminimi">
    <span style="color: white;" class="name-span">Tuomas Paavolainen Tmi <script>
            document.write(new Date().getFullYear())
        </script></span>
</div>


<script src="<?php bloginfo('template_directory'); ?>/assets/js/index.js"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch&flags=gated"></script>

</body>

</html>