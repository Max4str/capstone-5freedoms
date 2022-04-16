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
                            <?php $sanctuaryhorse_image = get_field('sanctuary_horse_img'); ?>
                            <?php if ($sanctuaryhorse_image) : ?>
                                <?php
                                $img_url = $sanctuaryhorse_image['url'];
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
                        <?php get_field('sanctuary_horse_name'); ?>
                        <!-- text -->
                        <?php $sanctuaryhorsename = get_field('sanctuary_horse_name'); ?>
                        <?php if ($sanctuaryhorsename) : ?>
                            <h3><?php _e($sanctuaryhorsename); ?></h3>
                        <?php endif; ?>
                        <div class="pagetext">
                            <!-- text -->
                            <?php $sanctuaryhorseage = get_field('sanctuary_horse_age'); ?>
                            <?php if ($sanctuaryhorseage) : ?>
                                <p><strong>Age:</strong> <?php _e($sanctuaryhorseage); ?></p>
                            <?php endif; ?>



                            <!-- text -->
                            <?php $sanctuaryhorsedescription = get_field('sanctuary_horse_description'); ?>
                            <?php if ($sanctuaryhorsedescription) : ?>
                                <p><?php _e($sanctuaryhorsedescription); ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- text -->
                        <?php $processtitle = get_field('sponsor_title'); ?>
                        <?php if ($processtitle) : ?>
                            <p><?php _e($processtitle); ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- text -->
                    <?php $process = get_field('sponsor_process'); ?>
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



</div>