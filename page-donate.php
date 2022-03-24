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

		<?php if ( have_posts() ) :?>
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

				<!-- Fundraiser -->
				<section>
					<?php the_content(); ?>
				</section>

				<!-- Donate -->
				<section class="donate">
					<?php $donate_options = get_field('donate_options'); ?>
					<?php if($donate_options): ?>
				
						<div class="donate-info">

							<!-- Title -->
							<?php $donate_options_title = $donate_options['donate_options_title']; ?>
							<?php if($donate_options_title): ?>
								<h3><?php _e($donate_options_title); ?></h3>
							<?php endif; ?>
							
							<!-- Text -->
							<?php $donate_options_text = $donate_options['donate_options_text']; ?>
							<?php if($donate_options_text): ?>
								<p><?php _e($donate_options_text); ?></p>
							<?php endif; ?>

						</div>

						<!-- Donate options -->
						<?php
							$args = array(
								'post_type' => 'donate_options',
								'posts_per_page' => 4,
								'order' => 'ASC'
							);
							$donate_options = new WP_Query($args);
						?>

						<?php if($donate_options->have_posts()) : ?>
							<div class="donate-options">
								<!-- start the loop -->
								<?php while($donate_options->have_posts()) : $donate_options->the_post(); ?>
									<div class="donate-card">
										<a class="donate-card-title" href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>
										<?php $short_description = get_field('short_description'); ?>
										<?php if($short_description): ?>
											<p class="donate-card-text"><?php _e($short_description); ?></p>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
								<!-- end while loop -->
							</div>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					<?php endif; ?>
				</section>
				

				<!-- Quote -->
				<div class="quote">
					<?php $quote = get_field('quote'); ?>
					<?php if($quote): ?>
						<p><?php _e($quote); ?></p>
					<?php endif; ?>

				</div>

				
				<!-- Intructions -->
				<section class="instruction">
					<?php $instructions = get_field('instructions'); ?>
					<?php if($instructions): ?>
					
						<!-- Title -->
						<?php $intructions_title = $instructions['intructions_title']; ?>
						<?php if($intructions_title): ?>
							<h3><?php _e($intructions_title); ?></h3>
						<?php endif; ?>
					
						<!--Step One  -->
						<div class="step-one">
							<?php $step_one = $instructions['step_one']; ?>
							<?php if($step_one): ?>
						
								<!-- Step One Title -->
								<?php $step_one_title = $step_one['step_one_title']; ?>
								<?php if($step_one_title): ?>
									<h4><?php _e($step_one_title); ?></h4>
								<?php endif; ?>
								
								<!-- Step One Text -->
								<?php $step_one_text = $step_one['step_one_text']; ?>
								<?php if($step_one_text): ?>
									<p><?php _e($step_one_text); ?></p>
								<?php endif; ?>
					
							<?php endif; ?>
						</div>

						<!-- Step Two -->
						<div class="step-two">
							<?php $step_two = $instructions['step_two']; ?>
							<?php if($step_two): ?>
						
								<!-- Step Two Title -->
								<?php $step_two_title = $step_two['step_two_title']; ?>
								<?php if($step_two_title): ?>
									<h4><?php _e($step_two_title); ?></h4>
								<?php endif; ?>
								
								<!-- Step Two Text -->
								<?php $step_two_text = $step_two['step_two_text']; ?>
								<?php if($step_two_text): ?>
									<p><?php _e($step_two_text); ?></p>
								<?php endif; ?>
					
							<?php endif; ?>
						</div>

						<!-- Step Three -->
						<div class="step-three">
							<?php $step_three = $instructions['step_three']; ?>
							<?php if($step_three): ?>
						
								<!-- Step Three Title -->
								<?php $step_three_title = $step_three['step_three_title']; ?>
								<?php if($step_three_title): ?>
									<h4><?php _e($step_three_title); ?></h4>
								<?php endif; ?>
								
								<!-- Step Three Text -->
								<?php $step_three_text = $step_three['step_three_text']; ?>
								<?php if($step_three_text): ?>
									<p><?php _e($step_three_text); ?></p>
								<?php endif; ?>
					
							<?php endif; ?>
						</div>

						
					
					<?php endif; ?>
				</section>

				<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'five-freedoms-ranch' ),
							'after'  => '</div>',
						)
					);
				?>
			</div><!-- .entry-content -->
			
		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
