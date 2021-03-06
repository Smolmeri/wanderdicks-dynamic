<?php

// Custom Fields

$main_image = get_field('main_image');
$main_header = get_field('main_header');

$team_body = get_field('team_body');

$support_members = get_field('support_members');

get_header();
?>

<!-- Hero section -->
<div class="container-team">
    <div class="team-hero-image" style="background-image: url(<?php echo $main_image[url] ?>)"></div>
    <h1 class="big-header" style="color: black; white-space: nowrap;"><?php echo $main_header ?></h1>
    <div class="team-hero-container">
        <p><?php echo $team_body; ?></p>
    </div>

    <!-- Team member cards -->
    <div class="mega-container">
        <div class="team-container">
            <?php $loop = new WP_Query(array('post_type' => 'team_member', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="card">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                    <?php if (!empty($url)) : ?>
                        <div class="member-image" style="background-image: url(<?php echo $url ?>)"></div>
                    <?php elseif (empty($url)) : ?>
                        <div class="member-image" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/wanderdicks_black.png)"></div>
                    <?php endif ?>
                    <div class="card-container">
                        <h4><b><?php the_field('full_name'); ?></b></h4>
                        <p><?php the_field('title') ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <!-- <div class="support-members">
            <h2>Supporting members:</h2>
            <p><?php echo $support_members ?></p>
        </div> -->
    </div>

</div>
<?php
get_footer();
?>