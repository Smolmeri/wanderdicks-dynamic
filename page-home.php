<?php
/*
    Template Name: Home Page
*/

// Custom Fields

$hero_image = get_field('hero_image');
$main_logo = get_field('main_logo');

$mission_image = get_field('mission_image');
$mission_header = get_field('mission_header');
$mission_paragraph = get_field('mission_paragraph');

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
    <div class="info-container">
        <i class="fas fa-tree fa-9x"></i>
        <p class="medium-header">We are a group of friends with a passions towards the great outdoors and maintaining it's beauty! Our aim is to plant trees and we also keep a blog of our many adventures.</p>
        <p class="medium-header">Scroll down to get to know us better!</p>
    </div>
</section>

<!-- Mission section -->
<section id="mission">
    <div class="mission-container">

        <div class="mission-image" style="background-image: url(<?php echo $mission_image[url] ?>)">"></div>
        <div class="mission-text">
            <h1 class="big-header"><?php echo $mission_header; ?></h1>
            <p class="narrow-paragraph"><?php echo $mission_paragraph; ?></p>

            <a href="/mission.html"><button class="s-button" style="border: 1px white solid; color: white;">Read More</button></a>
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

            <a href="team.html"><button class="s-button">>></button></a>
        </div>
    </div>
</section>

<!-- Blog section -->
<section id="blog">
    <h1 class="big-header blog-header-container"><?php echo $blog_header; ?></h1>
    <div class="blog-container">
        <?php $loop = new WP_Query(array('post_type' => 'blog_posts', 'orderby' => 'post_id', 'order' => 'DESC')); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="blog-card">
                <!-- <div class="card-image"></div> -->
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <div class="card-image" style="background-image: url(<?php echo $url ?>"></div>

                <div class="card-text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                    <span><?php the_author(); ?></span>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <button class="s-button">Test</button>
</section>

<?php
get_footer();
?>