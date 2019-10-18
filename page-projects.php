<?php

// Custom Fields

$main_image = get_field('main_image');
$main_header = get_field('main_header');
$sub_header = get_field('sub_header');

get_header();
?>

<!-- Main Section -->
<div class="mission-container">
    <div class="mission-image" style="background-image: url(<?php echo $main_image[url] ?>)"></div>
    <div class="mission-text-container">
        <div class="mission-text">
            <h1 class="big-header"><?php echo $main_header ?></h1>
            <!-- <div class="mission-image-2" style="background-image: url(<?php echo $mission_image[url] ?>)"></div> -->
            <p><?php echo $sub_header ?></p>
        </div>
    </div>
</div>

<div class="mission-main">
    <div class="text-container">
    <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
    <?php endwhile; ?>
    
    </div>

</div>

<!-- Mobile version -->
<div class="mission-container-mobile">
    <div class="mission-text-container-mobile">
        <div class="mission-text-mobile">
            <h1 class="big-header"><?php echo $main_header ?></h1>
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
    </div>
</div>

<?php
get_footer();
?>