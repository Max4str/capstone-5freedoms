<?php
/**
 * Template part for displaying post content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package five-freedoms-ranch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-img">
		<!-- image size options are: thumbnail, medium, large -->
		<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
	</div>
	<div class="blog-card-body">
		<?php the_title('<h4>', '</h4>'); ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">read more</a>
	</div>
</article>
