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

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
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

		<div class="site-info">	
			<p class="copyright">&copy;2022 5 Freedoms Ranch by Lunar Point. All rights reserved.</p>		

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
