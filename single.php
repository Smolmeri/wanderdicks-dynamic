<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wanderdicks
 */

get_header();
?>

<div id=single-post>
	<div class="single-container">
		<div class="info-container">
			<?php while (have_posts()) : the_post(); ?>
				<h1>
					<?php the_title(); ?>
				</h1>

				<?php $id = get_the_author_meta('ID'); ?>
				<?php $avatar = get_avatar($id, 48, 'retro'); ?>
				<div class="author-avatar">
					<?php echo $avatar; ?>
					<div class="text-box">
						<span class="name-span"><?php the_author(); ?></span>
						<span class="light-span"><?php the_date('M jS y'); ?></span>
					</div>
				</div>
		</div>
		<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
		<?php if (!empty($url)) : ?>
			<div class="image-container" style="background-image: url(<?php echo $url ?>"></div>
		<?php elseif (empty($url)) : ?>
			<div class="image-container" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/wanderdicks_black.png)"></div>
		<?php endif ?>
		<div class="body-text"><?php the_content(); ?></div>
	<?php endwhile; ?>

	</div>
</div>

<?php get_footer();
