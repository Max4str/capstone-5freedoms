<?php
/**
 * ANNOUNCEMENTS PAGE - Max
 * 
 * The template for displaying all blog posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package five-freedoms-ranch
 */
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) :?>
			<!-- <header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</header>.entry-header -->

			<!-- <?php five_freedoms_ranch_post_thumbnail(); ?> -->

			<!-- Banner -->
			<!-- <div class="banner">
				<?php $banner = get_field('banner'); ?>
				<?php if($banner): ?>
					
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					Banner Image
					<?php $banner_image = $banner['banner_image']; ?>
					<?php if($banner_image): ?>
						<?php 
							$img_url = $banner_image['url'];
						?>
						<div class="banner-img">
							<img src="<?php print_r(esc_url($img_url)); ?>">
						</div>
					<?php endif; ?>
					
					Banner Text
					<?php $banner_text = $banner['banner_text']; ?>
					<?php if($banner_text): ?>
						<p><?php _e($banner_text); ?></p>
					<?php endif; ?>
					
				<?php endif; ?>
			</div> -->

			<div class="entry-content">

				<h2 class="entry-title announcements-title">WHAT'S NEW</h2>

				<div class="announcements">
					<?php
					while ( have_posts() ) :
						
						the_post();
	
						get_template_part( 'template-parts/content', 'home' );
	
					endwhile; // End of the loop.
					?>
				</div>

			</div><!-- .entry-content -->

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>