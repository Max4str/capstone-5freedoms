<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package five-freedoms-ranch
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="footer-top">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
					<?php
				else :
					?>
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
					<?php
				endif;
				$five_freedoms_ranch_description = get_bloginfo( 'description', 'display' );
				if ( $five_freedoms_ranch_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $five_freedoms_ranch_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			
			<div class="contact">
				<!-- address, phone, email -->
				<?php if(is_active_sidebar('footer-col-1')):?>
					<?php dynamic_sidebar('footer-col-1'); ?>
				<?php endif; ?>
			</div>
			
			<div class="social">
				<!-- social media links -->
				<?php if(is_active_sidebar('footer-col-2')):?>
					<?php dynamic_sidebar('footer-col-2'); ?>
				<?php endif; ?>
			</div>
			
			<div class="hours">
				<!-- open hours -->
				<?php if(is_active_sidebar('footer-col-3')):?>
					<?php dynamic_sidebar('footer-col-3'); ?>
				<?php endif; ?>
			</div>

			<!-- contact form -->

			<div class="contact-form">
				<?php if(is_active_sidebar('footer-form')):?>
					<?php dynamic_sidebar('footer-form'); ?>
				<?php endif; ?>
			</div>
				
		</div>

		<div class="site-info">	
			
			<p class="copyright">&copy;2022 5 Freedoms Ranch by Lunar Point.<br>All rights reserved.</p>		

			<p class="policy">
				<a href="#">Privacy Policy</a>
				<span class="sep"> | </span>
				<a href="#">Terms of Use</a>
			</p>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
