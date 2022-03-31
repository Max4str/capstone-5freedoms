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
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                <?php endif; ?>

                <!-- Banner Text -->
                <?php $banner_text = $banner['banner_text']; ?>
                <?php if ($banner_text) : ?>
                    <p><?php _e($banner_text); ?></p>
                <?php endif; ?>

            <?php endif; ?>
        </div>



        <section class="getinvolved">


            <div class="get-involved-content">
                <!--title -->
                <?php $get_involved_title = get_field('get_involved_title'); ?>
                <?php if ($get_involved_title) : ?>
                    <h3><?php _e($get_involved_title); ?></h3>
                <?php endif; ?>

                <!-- text -->
                <?php $get_involved_intro = get_field('intro'); ?>
                <?php if ($get_involved_intro) : ?>
                    <p><?php _e($get_involved_intro); ?></p>
                <?php endif; ?>
            </div>

            <?php
            $args = array(
                'post_type' => 'get_involved',
                'posts_per_page' => 2,
                'order' => 'ASC'
            );
            $volunteer = new WP_Query($args);
            ?>


            <div class="volunteer options">
                <?php if ($volunteer->have_posts()) :
                ?>
                    <div class="volunteer-options">
                        <!-- start the loop -->
                        <?php while ($volunteer->have_posts()) : $volunteer->the_post(); ?>
                            <div class="volunteer card">
                                <h4 class="volunteer-title" href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></h4>

                                <p class="volunteer text"><?php the_content(); ?></p>

                            </div>
                        <?php endwhile; ?>
                        <!-- end while loop -->
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif;
                ?>

            </div>



    </div>


</main><!-- #main -->

<?php
get_footer();
