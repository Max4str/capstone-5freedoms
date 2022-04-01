<?php
/**
 * EVENTS PAGE - Max
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package five-freedoms-ranch
 */
?>

<?php get_header(); ?>

<!-- EVENTS WIDGET HERE -->

<div class="banner">
    <?php $banner = get_field('banner'); ?>
    <?php if($banner): ?>
        
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <!-- Banner Image -->
        <?php $banner_image = $banner['banner_image']; ?>
        <?php if($banner_image): ?>
            <?php 
                $img_url = $banner_image['url'];
            ?>
            <img src="<?php print_r(esc_url($img_url)); ?>">
        <?php endif; ?>
        
        <!-- Banner Text -->
        <?php $banner_text = $banner['banner_text']; ?>
        <?php if($banner_text): ?>
            <p><?php _e($banner_text); ?></p>
        <?php endif; ?>
        
    <?php endif; ?>
</div>

<?php get_footer(); ?>