<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package five-freedoms-ranch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header>.entry-header -->

	<?php five_freedoms_ranch_post_thumbnail(); ?>

	<div class="entry-content">
		
		<!-- Banner -->
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


		<!-- Page Content -->
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'five-freedoms-ranch' ),
					'after'  => '</div>',
				)
			);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
