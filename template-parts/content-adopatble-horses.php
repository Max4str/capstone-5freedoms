<?php

/**
 * Template part for displaying post content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package five-freedoms-ranch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-container">
        <div class="blog-img">
            <!-- image size options are: thumbnail, medium, large -->
            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
        </div>
        <div class="horse-images">
            <?php the_title('<h4>', '</h4>'); ?>
            <?php the_excerpt(); ?>
            <!-- <a href="<?php the_permalink(); ?>">read more</a> -->
            <a href="<?php the_permalink(); ?>" class="read-more-link">
                read more
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                    <g id="plus_icon" data-name="plus icon" transform="translate(-299.5 -1152)">
                        <line id="Line_4" data-name="Line 4" x2="8" transform="translate(300.5 1157)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
                        <line id="Line_5" data-name="Line 5" y2="8" transform="translate(304.5 1153)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</article>