<?php
/*
    Template Name: Home Page
*/

// Custom Fields

$hero_image = get_field('hero_image');
$main_logo = get_field('main_logo');

$mission_statement = get_field('mission_statement');

$project_image = get_field('project_image');
$project_header = get_field('project_header');
$project_paragraph = get_field('project_paragraph');

$team_image = get_field('team_image');
$team_header = get_field('team_header');
$team_paragraph = get_field('team_paragraph');

$blog_header = get_field('blog_header');

get_header();
?>


<!-- Hero image -->
<div class="hero-container" style="background-image: url(<?php echo $hero_image[url] ?>)">
    <!-- <div class="overlay"></div> -->
    <img src="<?php echo $main_logo[url] ?>" alt="<?php echo $main_logo[alt] ?>">
    <h1 class="big-header"><?php bloginfo('name') ?></h1>
    <h2><?php bloginfo('description') ?></h2>
    <a href="#info"><i class="fas fa-angle-down fa-5x"></i></a>
</div>

<section id="info">
    <div class="mission-info-container">
        <div class="icons">
            <i class="fas fa-tree fa-5x"></i>
            <i class="fas fa-tree fa-9x"></i>
            <i class="fas fa-tree fa-5x"></i>
        </div>
        <p class="small-header"><?php echo $mission_statement ?></p>
    </div>
</section>

<!-- Mission section -->
<section id="mission">
    <div class="projects-container">

        <div class="projects-image" style="background-image: url(<?php echo $project_image[url] ?>)"></div>
        <div class="projects-text">
            <h1 class="big-header"><?php echo $project_header; ?></h1>
            <p class="narrow-paragraph"><?php echo $project_paragraph; ?></p>

            <a id="projects-btn" class="s-button" href="projects">Read More</a>
        </div>

        <div style="background-image: url(<?php echo $project_image[url] ?>)" class="projects-text-mobile">
            <h1 class="big-header"><?php echo $project_header; ?></h1>
            <p class="narrow-paragraph"><?php echo $project_paragraph; ?></p>

            <a id="projects-btn" class="s-button" href="projects">Read More</a>
        </div>
    </div>
</section>


<!-- About us section -->
<section id="about">
    <div class="about-container">
        <div class="about-image" style="background-image: url(<?php echo $team_image[url] ?>)"></div>
        <div class="about-text">
            <h1 class="big-header"><?php echo $team_header; ?></h1>
            <p class="narrow-paragraph"><?php echo $team_paragraph; ?></p>
            <a href="team"><button class="s-button">>></button></a>
        </div>
    </div>
</section>

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
    <a href="blog" class="s-button">Read more</a>
</div>



<?php get_footer(); ?>