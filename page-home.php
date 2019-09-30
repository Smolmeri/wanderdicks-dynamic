<?php
/*
    Template Name: Home Page
*/

// Custom Fields

$mission_image = get_field('mission_image');
$mission_header = get_field('mission_header');
$mission_paragraph = get_field('mission_paragraph');

$team_image = get_field('team_image');
$team_header = get_field('team_header');
$team_paragraph = get_field('team_paragraph');

$main_logo = get_field('main_logo');


get_header();
?>


<!-- Hero image -->
<div class="hero-container">
    <!-- <div class="overlay"></div> -->
    <img src="<?php echo $main_logo[url] ?>" alt="<?php echo $main_logo[alt] ?>">
    <h1 class="big-header"><?php bloginfo('name') ?></h1>
    <h2><?php bloginfo('description') ?></h2>
</div>



<!-- Mission section -->
<section id="mission">
    <div class="mission-container">

        <div class="mission-image"><img src="<?php echo $mission_image[url] ?>" alt="<?php echo $mission_image[alt] ?>"></div>
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
        <div class="about-image"></div>
        <div class="about-text">
            <h1 class="big-header"><?php echo $team_header; ?></h1>
            <p class="narrow-paragraph"><?php echo $team_paragraph; ?></p>

            <a href="team.html"><button class="s-button">>></button></a>
        </div>
    </div>
</section>

<!-- Blog section -->
<section id="blog">
    <h1 class="big-header blog-header-container"><?php echo $adventures_header; ?></h1>

    <div class="blog-container">
        <?php $loop = new WP_Query(array('post_type' => 'blog_posts', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="blog-card">
                <!-- <div class="card-image"></div> -->
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <img src="<?php echo $url ?>" class="card-image"/>

                <div class="card-text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                    <span><?php the_author(); ?></span>
                </div>
            </div>


        <?php endwhile; ?>
    </div>
    <!-- <div class="blog-card">
        <div class="card-image"></div>
        <div class="card-text">
            <h1>Hees Lapland Fun</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="blog-card">
            <div class="card-image"></div>
            <div class="card-text">
                <h1>Hees Lapland Fun</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="blog-card">
            <div class="card-image"></div>
            <div class="card-text">
                <h1>Hees Lapland Fun</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div> -->

    <button class="s-button">Test</button>
</section>

<?php
get_footer();
