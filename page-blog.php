<?php

get_header();
?>

<div id="blog">
    <h1 class="big-header"><?php echo $blog_header; ?></h1>
    <div class="blog-cards-container">
        <?php $loop = new WP_Query(array('posts_per_page' => 4, 'post_type' => 'blog_posts', 'orderby' => 'post_id', 'order' => 'DESC')); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <a class="blog-card" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                    <div class="card-image" style="background-image: url(<?php echo $url; ?>"></div>
                    <div class="card-text">
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <?php the_author(); ?>
                    </div>
            </a>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();
?>