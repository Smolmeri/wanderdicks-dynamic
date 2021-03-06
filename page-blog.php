<?php

// Custom Fields

$main_header = get_field('main_header');

get_header();
?>

<div id="blog">
    <h1 class="big-header"><?php echo $main_header; ?></h1>
    <div class="blog-cards-container">
    
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $loop = new WP_Query(array(
                'paged' => $paged,
                'posts_per_page' => 8, 
                'post_type' => 'blog_posts', 
                'orderby' => 'post_id', 
                'order' => 'DESC'
                )
            ); 
        ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <a class="blog-card" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <?php if (!empty($url)) : ?>
                    <div class="card-image" style="background-image: url(<?php echo $url; ?>"></div>
                <?php elseif (empty($url)) : ?>
                    <div class="card-image" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/wanderdicks_black.png);"></div>
                <?php endif ?>
                <div class="card-text">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                    <?php the_author(); ?>
                </div>
            </a>
        <?php endwhile; ?>
        <nav>
            <?php previous_posts_link('&laquo; Previous') ?>
            <?php next_posts_link('&raquo; Next') ?>
        </nav>
    </div>
</div>

<?php
get_footer();
?>