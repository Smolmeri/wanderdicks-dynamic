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
                <p>Wanderdics</p>
                <p>email@address.com</p>
            </div>
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

            <div class="column-2">
                <p>Design & development: <br>
                    <a href="www.github.com/Smolmeri">
                        Tuomas Paavolainen Tmi
                    </a>
                </p>
            </div>
        </div>


        <script src="<?php bloginfo('template_directory'); ?>/assets/js/index.js"></script>

    </body>

</html>