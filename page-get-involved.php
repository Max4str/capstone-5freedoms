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

    <?php if (have_posts()) : ?>
        <!-- <header class="entry-header">
				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			</header>.entry-header -->

        <?php five_freedoms_ranch_post_thumbnail(); ?>

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


            <section class="getinvolved">

                <div class="get-involved-content">

                    <?php $volunteer_title = get_field('volunteer_title'); ?>
                    <?php if ($volunteer_title) : ?>
                        <h3><?php _e($volunteer_title); ?></h3>
                    <?php endif; ?>
                    <!-- text -->
                    <?php $getinvolved_text = get_field('get_involved_intro'); ?>
                    <?php if ($getinvolved_text) : ?>
                        <p><?php _e($getinvolved_text); ?></p>
                    <?php endif; ?>


                    <div class="gicard-container">
                        <div class="gicards">
                            <!-- Image-->
                            <?php $card1_img = get_field('card_1_img'); ?>
                            <?php if ($card1_img) : ?>
                                <?php
                                $img_url = $card1_img['url'];
                                ?>
                                <div class="img-circle">
                                    <img src="<?php print_r(esc_url($img_url)); ?>">
                                </div>
                            <?php endif; ?>

                            <!-- Title-->
                            <?php $card1_title = get_field('card_1_title'); ?>
                            <?php if ($card1_title) : ?>
                                <h4><?php _e($card1_title); ?></h4>
                            <?php endif; ?>

                            <!-- Text-->
                            <?php $card1_text = get_field('card_1_text'); ?>
                            <?php if ($card1_text) : ?>
                                <p><?php _e($card1_text); ?></p>

                            <?php endif; ?>

                        </div>

                        <div class="gicards">
                            <!-- Image-->
                            <?php $card2_img = get_field('card_2_img'); ?>
                            <?php if ($card2_img) : ?>
                                <?php
                                $img_url = $card2_img['url'];
                                ?>
                                <div class="img-circle">
                                    <img src="<?php print_r(esc_url($img_url)); ?>">
                                </div>
                            <?php endif; ?>

                            <!-- Title-->
                            <?php $card2_title = get_field('card_2_title'); ?>
                            <?php if ($card2_title) : ?>
                                <h4><?php _e($card2_title); ?></h4>
                            <?php endif; ?>

                            <!-- Text-->
                            <?php $card2_text = get_field('card_2_text'); ?>
                            <?php if ($card2_text) : ?>
                                <p><?php _e($card2_text); ?></p>

                            <?php endif; ?>

                        </div>
                    </div>
            </section>


            <section class="gi-donate">

                <?php $donate_title = get_field('donate_title'); ?>
                <?php if ($donate_title) : ?>
                    <h3><?php _e($donate_title); ?></h3>
                <?php endif; ?>

                <?php $donate_text = get_field('donate_text'); ?>
                <?php if ($donate_text) : ?>
                    <p><?php _e($donate_text); ?></p>
                <?php endif; ?>
                <div class="gicard-container">
                    <div class="gicards">
                        <!-- Image-->
                        <?php $card3_img = get_field('card_3_img'); ?>
                        <?php if ($card3_img) : ?>
                            <?php
                            $img_url = $card3_img['url'];
                            ?>
                            <div class="img-circle">
                                <img src="<?php print_r(esc_url($img_url)); ?>">
                            </div>
                        <?php endif; ?>

                        <!-- Title-->
                        <?php $card3_title = get_field('card_3_title'); ?>
                        <?php if ($card3_title) : ?>
                            <h4><?php _e($card3_title); ?></h4>
                        <?php endif; ?>

                        <!-- Text-->
                        <?php $card3_text = get_field('card_3_text'); ?>
                        <?php if ($card3_text) : ?>
                            <p><?php _e($card3_text); ?></p>

                        <?php endif; ?>

                    </div>

                    <div class="gicards wishlist">
                        <?php $card4 = get_field('card_4'); ?>
                        <?php if ($card4) : ?>

                            <!-- Title-->
                            <?php $card4_title = $card4['card_4_title']; ?>
                            <?php if ($card4_title) : ?>
                                <h4><?php _e($card4_title); ?></h4>
                            <?php endif; ?>



                            <!-- list -->
                            <ul class="list">
                                <?php $list_item_1 = $card4['list_item_1']; ?>
                                <?php if ($list_item_1) : ?>
                                    <li><?php _e($list_item_1); ?></li>
                                <?php endif; ?>


                                <?php $list_item_2 = $card4['list_item_2']; ?>
                                <?php if ($list_item_2) : ?>
                                    <li><?php _e($list_item_2); ?></li>
                                <?php endif; ?>

                                <?php $list_item_3 = $card4['list_item_3']; ?>
                                <?php if ($list_item_3) : ?>
                                    <li><?php _e($list_item_3); ?></li>
                                <?php endif; ?>

                                <?php $list_item_4 = $card4['list_item_4']; ?>
                                <?php if ($list_item_4) : ?>
                                    <li><?php _e($list_item_4); ?></li>
                                <?php endif; ?>

                                <?php $list_item_5 = $card5['list_item_5']; ?>
                                <?php if ($list_item_5) : ?>
                                    <li><?php _e($list_item_5); ?></li>
                                <?php endif; ?>


                            </ul>
                        <?php endif; ?>
                    </div>
                </div>


            </section>

        </div><!-- .entry-content -->

    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none');
        ?>
    <?php endif;
    ?>

</main><!-- #main -->

<?php
get_footer();
