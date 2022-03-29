<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package five-freedoms-ranch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/46e6209e11.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'five-freedoms-ranch' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top">
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
			
			<nav id="site-navigation" class="main-navigation">
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 18">
					<g id="Menu_Icon" data-name="Menu Icon" transform="translate(1 1)">
						<line id="Line_1" data-name="Line 1" x2="12" transform="translate(12)" fill="none" stroke="#4365ee" stroke-linecap="round" stroke-width="2"/>
						<line id="Line_2" data-name="Line 2" x2="24" transform="translate(0 8)" fill="none" stroke="#4365ee" stroke-linecap="round" stroke-width="2"/>
						<line id="Line_3" data-name="Line 3" x2="16" transform="translate(8 16)" fill="none" stroke="#4365ee" stroke-linecap="round" stroke-width="2"/>
					</g>
					</svg>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu', 
						'menu_id'        => 'main-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>

		<!-- Header Donate Btn -->

		<?php if(is_active_sidebar('donate-btn')):?>
			<?php dynamic_sidebar('donate-btn'); ?>
		<?php endif; ?>

	</header><!-- #masthead -->
