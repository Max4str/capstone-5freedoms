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


				<!-- About Content -->

					<div class="about-content-bg">

						<!-- Intro -->
						<section class="intro-bg">
							<?php $intro = get_field('intro'); ?>
							<?php if($intro): ?>
							
								<!-- Title-->
								<?php $intro_title = $intro['intro_title']; ?>
								<?php if($intro_title): ?>
									<h3><?php _e($intro_title); ?></h3>
								<?php endif; ?>
								
								<!-- Text -->
								<?php $intro_text = $intro['intro_text']; ?>
								<?php if($intro_text): ?>
									<p><?php _e($intro_text); ?></p>
								<?php endif; ?>

								<!-- Read More -->
								<?php $intro_read_more = $intro['intro_read_more']; ?>
								<?php if($intro_read_more): ?>
									<div class="read-more">
										<p class="read-more-link">
											read more 
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
											<g id="plus_icon" data-name="plus icon" transform="translate(-299.5 -1152)">
												<line id="Line_4" data-name="Line 4" x2="8" transform="translate(300.5 1157)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
												<line id="Line_5" data-name="Line 5" y2="8" transform="translate(304.5 1153)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
											</g>
											</svg>
										</p>
										<p class="read-more-text"><?php _e($intro_read_more); ?></p>
									</div>
								<?php endif; ?>

							<?php endif; ?>
						</section>
						
						<!-- Stats -->
						<div class="stat">
							<div class="stat-circle">
								<div class="stat-meet"><p>Meet</p></div>
								<div class="stat-adopt"><p>Adopt</p></div>
								<div class="stat-donate"><p>Donate</p></div>
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
											<p class="stat-number"><?php _e($stat_field_one_number); ?></p>
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
											<p class="stat-number"><?php _e($stat_field_two_number); ?></p>
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
											<p class="stat-number"><?php _e($stat_field_three_number); ?></p>
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
											<p class="stat-number"><?php _e($stat_field_four_number); ?></p>
										<?php endif; ?>
										
										<!-- Title -->
										<?php $stat_field_four_title = $stat_field_four['stat_field_four_title']; ?>
										<?php if($stat_field_four_title): ?>
											<p><?php _e($stat_field_four_title); ?></p>
										<?php endif; ?>

									<?php endif; ?>
								</div>

							<?php endif; ?>
							
						</div>
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


					<!-- Mission & Vision Title -->
					
					<section class="section-title">
						<?php $section_two = get_field('section_two'); ?>
						<?php if($section_two): ?>
						
							<!-- Title-->
							<?php $section_two_title = $section_two['section_two_title']; ?>
							<?php if($section_two_title): ?>
								<h3 class="ms-title dk-blue" onclick="AboutMissionVission(event,'mission')"><?php _e($section_two_title); ?></h3>
							<?php endif; ?>
						<?php endif; ?>

						<?php $section_three = get_field('section_three'); ?>
						<?php if($section_three): ?>
						
							<!-- Title-->
							<?php $section_three_title = $section_three['section_three_title']; ?>
							<?php if($section_three_title): ?>
								<h3 class="ms-title" onclick="AboutMissionVission(event,'vision')"><?php _e($section_three_title); ?></h3>
							<?php endif; ?>
						<?php endif; ?>
					</section>


					<div class="section-two">
						<?php $section_two = get_field('section_two'); ?>
						<?php if($section_two): ?>

							<!-- List -->
							<?php $section_two_list = $section_two['section_two_list']; ?>
							<?php if($section_two_list): ?>
								<ul id="mission" class="ms-content list">

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

								</ul>
							<?php endif; ?>

						<?php endif; ?>
					</div>


					<!-- Vision -->
					<div class="section-three">
						<?php $section_three = get_field('section_three'); ?>
						<?php if($section_three): ?>
						
							<!-- Text -->
							<?php $section_three_text = $section_three['section_three_text']; ?>
							<?php if($section_three_text): ?>
								<p id="vision" class="ms-content " style="display:none"><?php _e($section_three_text); ?></p>
							<?php endif; ?>

						<?php endif; ?>
					</div>

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
