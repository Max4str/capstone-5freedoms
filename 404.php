<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package five-freedoms-ranch
 */

get_header();
?>

	<main id="primary" class="site-main">
		

		<section class="banner error-404 not-found">
			<!-- Title -->
			<h2 class="entry-title">Oops.. Wrong Way</h2>

			<!-- Image -->
			<?php if(is_active_sidebar('404-banner-img')):?>	
				<?php dynamic_sidebar('404-banner-img'); ?>
			<?php endif; ?>

			<!-- Text -->
			<div class="banner-content">
				<!-- Text -->
				<?php if(is_active_sidebar('404-banner-content')):?>
					<?php dynamic_sidebar('404-banner-content'); ?>
				<?php endif; ?>
			</div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
