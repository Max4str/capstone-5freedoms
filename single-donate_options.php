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
		<div class="donate-option-content">
			<!-- Banner -->
			<div class="banner">
				<?php $banner = get_field('banner'); ?>
				<?php if($banner): ?>
					
					<?php _e( '<h2 class="entry-title">Donate</h2>' ); ?>
					
					<!-- Banner Image -->
					<?php $banner_image = $banner['banner_image']; ?>
					<?php if($banner_image): ?>
						<?php 
							$img_url = $banner_image['url'];
						?>
						<div class="banner-img">
							<img src="<?php print_r(esc_url($img_url)); ?>">
						</div>
					<?php endif; ?>

					<!-- Banner Text -->
					<?php $banner_text = $banner['banner_text']; ?>
					<?php if($banner_text): ?>
						<p><?php _e($banner_text); ?></p>
					<?php endif; ?>
					
				<?php endif; ?>
			</div>
			
			<!-- Donate Option Form Info -->
			<?php $option_donate_form = get_field('option_donate_form'); ?>
			<?php if($option_donate_form): ?>
				<div class="donate-option-form">
					<?php echo do_shortcode($option_donate_form); ?>
				</div>
			<?php endif; ?>
			
			<?php if(have_posts()) : ?>
				<!-- start the loop -->
				<?php while(have_posts()) : the_post(); ?>
				<div <?php post_class();?> id="post-<?php the_ID();?>" >
					<!-- Donate Option Image -->	
					<div class="donate-option-image">
						<div class="note">
							<i class="fa-solid fa-circle-info"></i>
							<p>Slide to view</p>
							<i class="fa-solid fa-caret-right"></i>
							<i class="fa-solid fa-caret-right"></i>
							<i class="fa-solid fa-caret-right"></i>
						</div>
						<div class="slider">
							<!-- Option Image 1 -->
							<?php $option_image_one = get_field('option_image_one'); ?>
							<?php if($option_image_one): ?>
								<?php 
									$img_url = $option_image_one['url'];
								?>
								<div>
									<img src="<?php print_r(esc_url($img_url)); ?>">
								</div>
							<?php endif; ?>
							
							<!-- Option Image 2 -->
							<?php $option_image_two = get_field('option_image_two'); ?>
							<?php if($option_image_two): ?>
								<?php 
									$img_url = $option_image_two['url'];
								?>
								<div>
									<img src="<?php print_r(esc_url($img_url)); ?>">
								</div>
							<?php endif; ?>
						</div>
												
					</div>
			
				</div>
				<?php endwhile; ?>
				<!-- end while loop -->
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
