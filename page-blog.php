<?php
/*
    Template Name: Home Page
*/

// Custom Fields

$blog_header = get_field('blog_header');

get_header();
?>

<section id="blog">
    <h1 class="big-header blog-header-container">Adventures</h1>
    <div class="blog-container">
        <?php $loop = new WP_Query(array('post_type' => 'blog_posts', 'orderby' => 'post_id', 'order' => 'DESC')); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <a class="blog-card" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                    <!-- <div class="card-image"></div> -->
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                    <div class="card-image" style="background-image: url(<?php echo $url ?>"></div>

                    <div class="card-text">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt(); ?></p>
                        <span><?php the_author(); ?></span>
                    </div>
            </a>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
?>