<?php

/**
 * The template for displaying all single donate options
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package five-freedoms-ranch
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Banner -->
    <div class="banner">
        <?php $banner = get_field('banner'); ?>
        <?php if ($banner) : ?>

            <?php _e('<h2 class="entry-title">Get Involved</h2>'); ?>
            <!-- Banner Donate Title -->
            <?php if (have_posts()) : ?>
                <!-- start the loop -->
                <?php while (have_posts()) : the_post(); ?>
                    <h3 class="volunteer-title" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <?php the_title(); ?>
                    </h3>
                <?php endwhile; ?>
                <!-- end while loop -->
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

            <!-- Banner Text -->
            <?php $banner_text = $banner['banner_text']; ?>
            <?php if ($banner_text) : ?>
                <p><?php _e($banner_text); ?></p>
            <?php endif; ?>

        <?php endif; ?>
    </div>

    <?php if (have_posts()) : ?>
        <!-- start the loop -->
        <?php while (have_posts()) : the_post(); ?>
            <article class="volunteer-content" <?php post_class(); ?> id="post-<?php the_ID(); ?>">



                </div>
            </article>
        <?php endwhile; ?>
        <!-- end while loop -->
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();
