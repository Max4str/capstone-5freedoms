<?php
/**
 * The template for displaying About Content page
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


				<!-- About Content -->

					<div class="about-content-bg">

						<!-- Intro -->
						<section class="intro-bg">
							<?php $intro = get_field('intro'); ?>
							<?php if($intro): ?>
							
								<!-- Title-->
								<?php $intro_title = $section_one['intro_title']; ?>
								<?php if($intro_title): ?>
									<h3><?php _e($intro_title); ?></h3>
								<?php endif; ?>
								
								<!-- Text -->
								<?php $intro_text = $section_one['intro_text']; ?>
								<?php if($intro_text): ?>
									<p><?php _e($intro_text); ?></p>
								<?php endif; ?>

							<?php endif; ?>
						</section>
						
						<!-- Stats -->
						<section class="stat">
							<div class="stat-circle">
								<div>Meet</div>
								<div>Adopt</div>
								<div>Donate</div>
							</div>

							<?php $stats = get_field('stats'); ?>
							<?php if($stats): ?>
						
								<!-- Stat Field 1 -->
								<div class="stat-info">
									<?php $stat_field_one = $stats['stat_field_one']; ?>
									<?php if($stat_field_one): ?>
								
										<!-- Number -->
										<?php $stat_field_one_number = $stat_field_one['stat_field_one_number']; ?>
										<?php if($stat_field_one_number): ?>
											<p><?php _e($stat_field_one_number); ?></p>
										<?php endif; ?>
										
										<!-- Title -->
										<?php $stat_field_one_title = $stat_field_one['stat_field_one_title']; ?>
										<?php if($stat_field_one_title): ?>
											<p><?php _e($stat_field_one_title); ?></p>
										<?php endif; ?>

									<?php endif; ?>
								</div>

								<!-- Stat Field 2 -->
								<div class="stat-info">
									<?php $stat_field_two = $stats['stat_field_two']; ?>
									<?php if($stat_field_two): ?>
								
										<!-- Number -->
										<?php $stat_field_two_number = $stat_field_two['stat_field_two_number']; ?>
										<?php if($stat_field_two_number): ?>
											<p><?php _e($stat_field_two_number); ?></p>
										<?php endif; ?>
										
										<!-- Title -->
										<?php $stat_field_two_title = $stat_field_two['stat_field_two_title']; ?>
										<?php if($stat_field_two_title): ?>
											<p><?php _e($stat_field_two_title); ?></p>
										<?php endif; ?>

									<?php endif; ?>
								</div>

								<!-- Stat Field 3 -->
								<div class="stat-info">
									<?php $stat_field_three = $stats['stat_field_three']; ?>
									<?php if($stat_field_three): ?>
								
										<!-- Number -->
										<?php $stat_field_three_number = $stat_field_three['stat_field_three_number']; ?>
										<?php if($stat_field_three_number): ?>
											<p><?php _e($stat_field_three_number); ?></p>
										<?php endif; ?>
										
										<!-- Title -->
										<?php $stat_field_three_title = $stat_field_three['stat_field_three_title']; ?>
										<?php if($stat_field_three_title): ?>
											<p><?php _e($stat_field_three_title); ?></p>
										<?php endif; ?>

									<?php endif; ?>
								</div>

								<!-- Stat Field 4 -->
								<div class="stat-info">
									<?php $stat_field_four = $stats['stat_field_four']; ?>
									<?php if($stat_field_four): ?>
								
										<!-- Number -->
										<?php $stat_field_four_number = $stat_field_four['stat_field_four_number']; ?>
										<?php if($stat_field_four_number): ?>
											<p><?php _e($stat_field_four_number); ?></p>
										<?php endif; ?>
										
										<!-- Title -->
										<?php $stat_field_four_title = $stat_field_four['stat_field_four_title']; ?>
										<?php if($stat_field_four_title): ?>
											<p><?php _e($stat_field_four_title); ?></p>
										<?php endif; ?>

									<?php endif; ?>
								</div>

							<?php endif; ?>
							
						</section>
					</div>

					

					<!-- Story -->

					<section class="section-one">
						<?php $section_one = get_field('section_one'); ?>
						<?php if($section_one): ?>
						
							<!-- Title-->
							<?php $section_one_title = $section_one['section_one_title']; ?>
							<?php if($section_one_title): ?>
								<h3><?php _e($section_one_title); ?></h3>
							<?php endif; ?>
							
							<!-- Text -->
							<?php $section_one_text = $section_one['section_one_text']; ?>
							<?php if($section_one_text): ?>
								<p><?php _e($section_one_text); ?></p>
							<?php endif; ?>

						<?php endif; ?>
					</section>


					<!-- Mission -->
					<section class="section-two">
						<?php $section_two = get_field('section_two'); ?>
						<?php if($section_two): ?>
						
							<!-- Title-->
							<?php $section_two_list = $section_two['section_two_list']; ?>
							<?php if($section_two_list): ?>
								<ol>

									<?php $list_item_1 = $section_two_list['list_item_1']; ?>
									<?php if($list_item_1): ?>
										<li><?php _e($list_item_1); ?></li>
									<?php endif; ?>

									<?php $list_item_2 = $section_two_list['list_item_2']; ?>
									<?php if($list_item_2): ?>
										<li><?php _e($list_item_2); ?></li>
									<?php endif; ?>

									<?php $list_item_3 = $section_two_list['list_item_3']; ?>
									<?php if($list_item_3): ?>
										<li><?php _e($list_item_3); ?></li>
									<?php endif; ?>

									<?php $list_item_4 = $section_two_list['list_item_4']; ?>
									<?php if($list_item_4): ?>
										<li><?php _e($list_item_4); ?></li>
									<?php endif; ?>

									<?php $list_item_5 = $section_two_list['list_item_5']; ?>
									<?php if($list_item_5): ?>
										<li><?php _e($list_item_5); ?></li>
									<?php endif; ?>

								</ol>
							<?php endif; ?>
							
							<!-- Text -->
							<?php $section_two_text = $section_two['section_two_text']; ?>
							<?php if($section_two_text): ?>
								<p><?php _e($section_two_text); ?></p>
							<?php endif; ?>

						<?php endif; ?>
					</section>


					<!-- Vision -->
					<section class="section-three">
						<?php $section_three = get_field('section_three'); ?>
						<?php if($section_three): ?>
						
							<!-- Title-->
							<?php $section_three_title = $section_three['section_three_title']; ?>
							<?php if($section_three_title): ?>
								<h3><?php _e($section_three_title); ?></h3>
							<?php endif; ?>
							
							<!-- Text -->
							<?php $section_three_text = $section_three['section_three_text']; ?>
							<?php if($section_three_text): ?>
								<p><?php _e($section_three_text); ?></p>
							<?php endif; ?>

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
