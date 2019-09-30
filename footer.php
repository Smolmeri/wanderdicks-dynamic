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
