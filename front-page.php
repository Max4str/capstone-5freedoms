<?php
/**
 * HOME PAGE - Max
 * 
 * The template for displaying all pages
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
			
			<!-- HERO BANNER -->
			<section class="home-banner">
				<div class="home-banner-img"><!-- css img --></div>
				<div class="home-banner-content">
					<h2>Tagline</h2>
					<p>Welcome Message</p>
					<a href="#" class="btn">I want to help!</a>
				</div>
			</section>
			<!-- END: HERO BANNER -->



			<!-- WHAT'S NEW -->
			<section class="home-">
				<h3>What's New</h3>
				<div>

					<!-- NEWEST BLOG POSTS HERE (2-3 of them) -->
					<!-- setup a query to display the first 3 blog posts. show 3 posts and output the image, title, excerpt, and read more -->

				</div>
				<a href="#" class="btn">More announcements</a>
			</section>
			<!-- END: WHAT'S NEW -->



			<!-- OUR MISSION -->
			<section class="home-mission">
				<div class="home-mission-img"><!-- css img --></div>
				<div class="home-mission-content">
					<h3>Our Mission</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</section>
			<!-- END: OUR MISSION -->



			<!-- CARDS SECTION -->
			<section class="home-cards">

				<!-- Card Template-->
				<div class="home-card-container">
					<img src="#" alt="">
					<h4>Meet Our Horses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#" class="btn">Meet Our Horses</a>
				</div>

				<!-- Card Template-->
				<div class="home-card-container">
					<img src="#" alt="">
					<h4>Our Wishlist</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#" class="btn">Donate Items</a>
				</div>

				<!-- Card Template-->
				<div class="home-card-container">
					<img src="#" alt="">
					<h4>Did You Know?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#" class="btn">Learn More</a>
				</div>

			</section>
			<!-- END: CARDS SECTION -->



			<!-- STATISTICS -->
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
			<!-- END: STATISTICS -->

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>