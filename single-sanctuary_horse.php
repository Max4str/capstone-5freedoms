<?php

/**
 * The template for displaying Donate Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package five-freedoms-ranch
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="entry-content">


        <!-- Banner -->
        <div class="banner">
            <?php $banner = get_field('banner'); ?>
            <?php if ($banner) : ?>

                <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                <!-- Banner Image -->
                <?php $banner_image = $banner['banner_image']; ?>
                <?php if ($banner_image) : ?>
                    <?php
                    $img_url = $banner_image['url'];
                    ?>
                    <div class="banner-img">
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                    </div>
                <?php endif; ?>

                <!-- Banner Text -->
                <?php $banner_text = $banner['banner_text']; ?>
                <?php if ($banner_text) : ?>
                    <p><?php _e($banner_text); ?></p>
                <?php endif; ?>

            <?php endif; ?>
        </div>


        <div class="conatiner">

            <?php if ($sanctuary->have_posts()) : ?>
                <!-- start the loop -->
                <?php while ($sanctuary->have_posts()) : $sanctuary->the_post(); ?>
                    <div <?php $sanctuary->post_class(); ?> id="post-<?php the_ID(); ?>">
                        <!-- main img -->
                        <div class="horse-images">
                            <div class="note">
                                <i class="fa-solid fa-circle-info"></i>
                                <p>Slide to view</p>
                                <i class="fa-solid fa-caret-right"></i>
                                <i class="fa-solid fa-caret-right"></i>
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="slider">
                                <!-- Option Image 1 -->
                                <?php $horse_image = get_field('horse_img'); ?>
                                <?php if ($horse_image) : ?>
                                    <?php
                                    $img_url = $horse_image['url'];
                                    ?>
                                    <div>
                                        <img src="<?php print_r(esc_url($img_url)); ?>">
                                    </div>
                                <?php endif; ?>

                                <!-- Option Image 2 -->
                                <?php $horse_image2 = get_field('horse_img_2'); ?>
                                <?php if ($horse_image2) : ?>
                                    <?php
                                    $img_url = $horse_image2['url'];
                                    ?>
                                    <div>
                                        <img src="<?php print_r(esc_url($img_url)); ?>">
                                    </div>
                                <?php endif; ?>

                                <!-- Option Image 4-->
                                <?php $horse_image4 = get_field('horse_img_4'); ?>
                                <?php if ($horse_image4) : ?>
                                    <?php
                                    $img_url = $horse_image4['url'];
                                    ?>
                                    <div>
                                        <img src="<?php print_r(esc_url($img_url)); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <!-- end while loop -->


                    <div class="horse-info">
                        <!-- Title -->
                        <?php get_field('horse_name'); ?>
                        <!-- text -->
                        <?php $horsename = get_field('horse_name'); ?>
                        <?php if ($horsename) : ?>
                            <h3><?php _e($horsename); ?></h3>
                        <?php endif; ?>

                        <!-- text -->
                        <?php $horseage = get_field('horse_age'); ?>
                        <?php if ($horseage) : ?>
                            <p><?php _e($horseage); ?></p>
                        <?php endif; ?>

                        <!-- text -->
                        <?php $horsedescription = get_field('horse_description'); ?>
                        <?php if ($horsedescription) : ?>
                            <p><?php _e($horsedescription); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="buttons">
                        <a href="https://5freedoms.web.dmitcapstone.ca/five-freedoms-ranch/donate/">Sponsor me</a>
                        <a href="https://5freedoms.web.dmitcapstone.ca/five-freedoms-ranch/education/">Learn more</a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
</main><!-- #main -->

<?php
get_footer(); ?>



</div>