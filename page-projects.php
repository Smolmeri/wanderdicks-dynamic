<?php

// REMOVED BANK DETAILS FOR LEGAL REASONS.
// LEFT IN COMMENTS IN CASE OF FUTURE NEEDS.
// Tom Paavolainen


// Custom Fields

$main_image = get_field('main_image');
$main_header = get_field('main_header');
$sub_header = get_field('sub_header');

// $iban = get_field('iban');
// $bic = get_field('bic');

get_header();
?>

<a data-scroll href="#missionScroll" class="scrollup" style="display: block; margin: 10px; background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/arrow-up.png;" onclick="ga('send', 'event', 'Animations', 'Clicked', 'ArrowUp');"></a>

<!-- Main Section -->
<div class="mission-container">
    <div class="mission-image" style="background-image: url(<?php echo $main_image[url] ?>)"></div>
    <div class="mission-text-container">
        <div class="mission-text">
            <h1 class="big-header"><?php echo $main_header ?></h1>
            <!-- <div class="mission-image-2" style="background-image: url(<?php echo $mission_image[url] ?>)"></div> -->
            <p><?php echo $sub_header ?></p>
            <!-- <p class="name-span">If you want to support become a supporter then click <u><a data-scroll href="#scrollHere" onclick="ga('send', 'event', 'Animations', 'Clicked', 'PaymentLink');">here!</a></u></p> -->
        </div>
    </div>
</div>

<div class="mission-main">
    <div class="text-container" id="missionScroll">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <!-- <div id="scrollHere" class="payment-details scrollHere">
            <H1>Become a supporting member</H1>
            <p>Wanderdicks Ry</p>
            <p><?php echo $iban ?></p>
            <p>Reference: <?php echo $bic ?></p>
        </div> -->
    </div>

</div>

<!-- Mobile version -->
<div class="mission-container-mobile">
    <div class="mission-text-container-mobile">
        <div class="mission-text-mobile">
            <h1 class="big-header"><?php echo $main_header ?></h1>
            <!-- <p class="name-span">If you want to support become a supporter then click <u><a data-scroll href="#scrollHereMobile" onclick="ga('send', 'event', 'Animations', 'Clicked', 'PaymentLink');">here!</a></u></p> -->
            <div class="mission-image-mobile" style="background-image: url(<?php echo $main_image[url] ?>)"></div>
            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio ipsa dignissimos quibusdam.</p> -->
        </div>
    </div>
</div>

<div class="mission-main-mobile">
    <div class="text-container-mobile">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <!-- <div id="scrollHereMobile" class="payment-details-mobile scrollHereMobile">
            <H1>Become a supporting member</H1>
            <p>Wanderdicks Ry</p>
            <p><?php echo $iban ?></p>
            <p>Reference: <?php echo $bic ?></p>
        </div> -->
    </div>
</div>

<?php
get_footer();
?>