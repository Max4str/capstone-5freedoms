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

		<!-- PART OF THE UNDERSCORE TEMPLATE -->
		<!-- <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'none' );

		endwhile;
		?> -->



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
		<section class="home-statistics">
			<div>
				<img src="" alt="">
				<div>
					<div>
						<p></p>
						<p></p>
					</div>
					<div>
						<p></p>
						<p></p>
					</div>
					<div>
						<p></p>
						<p></p>
					</div>
					<div>
						<p></p>
						<p></p>
					</div>
				</div>
			</div>
		</section>
		<!-- END: STATISTICS -->




	</main><!-- #main -->

<?php get_footer(); ?>