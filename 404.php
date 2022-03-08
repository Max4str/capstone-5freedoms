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

		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"><?php esc_html_e( 'Oops.. Wrong Way', 'five-freedoms-ranch' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>It seems like you are lost. Let&rsquor;s  ride back to the ranch.</p>
				<a class="learn-more link-404" href="index.php">ride to home</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
