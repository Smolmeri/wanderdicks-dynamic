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
            <li>Wanderdics</li>
            <li>wanderdicks@gmail.com</li>
            <ul>
    </div>

    <!-- <div class="instagram"> -->
        <a target="_blank" href="https://www.instagram.com/wanderdicks/?hl=fi"><i class="fab fa-instagram fa-5x"></i></a>
    <!-- </div> -->


    <div class="column-2">
        <div class="footer-nav-list">
            <ul>
                <a href="home">
                    <li>Home</li>
                </a>
                <a href="projects">
                    <li>Projects</li>
                </a>
                <a href="blog">
                    <li>Blog</li>
                </a>
                <a href="team">
                    <li>The Team</li>
                </a>
            </ul>
        </div>
    </div>
</div>
<div class="toiminimi">
    <span style="color: white;" class="name-span">Tuomas Paavolainen Tmi <script>
            document.write(new Date().getFullYear())
        </script></span>
</div>


<script src="<?php bloginfo('template_directory'); ?>/assets/js/index.js"></script>

</body>

</html>