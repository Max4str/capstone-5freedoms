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

            <?php if (have_posts()) : ?>
                <!-- start the loop -->
                <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <!-- main img -->
                        <div class="horse-images">

                            <!-- Option Image 1 -->
                            <?php $horse_image = get_field('adoptable_horse_img'); ?>
                            <?php if ($horse_image) : ?>
                                <?php
                                $img_url = $horse_image['url'];
                                ?>
                                <div>
                                    <img src="<?php print_r(esc_url($img_url)); ?>">
                                </div>
                            <?php endif; ?>



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
                        <div class="pagetext">
                            <!-- text -->
                            <?php $horseage = get_field('horse_age'); ?>
                            <?php if ($horseage) : ?>
                                <p><strong>Age:</strong> <?php _e($horseage); ?></p>
                            <?php endif; ?>

                            <!-- text -->
                            <?php $horsegender = get_field('horse_gender'); ?>
                            <?php if ($horsegender) : ?>
                                <p><strong>gender:</strong> <?php _e($horsegender); ?></p>
                            <?php endif; ?>

                            <!-- text -->
                            <?php $horsedescription = get_field('horse_description'); ?>
                            <?php if ($horsedescription) : ?>
                                <p><?php _e($horsedescription); ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- text -->
                        <?php $processtitle = get_field('adoption_process_title'); ?>
                        <?php if ($processtitle) : ?>
                            <p><?php _e($processtitle); ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- text -->
                    <?php $process = get_field('adoption_process'); ?>
                    <?php if ($process) : ?>
                        <p><?php _e($processS); ?></p>
                    <?php endif; ?>
        </div>
    </div>


<?php endwhile; ?>
<?php endif; ?>
</div>
</main><!-- #main -->

<?php
get_footer(); ?>