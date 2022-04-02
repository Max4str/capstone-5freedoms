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

	<div class="entry-content">


		<!-- Banner -->
		<div class="banner">
			<?php $banner = get_field('banner'); ?>
			<?php if ($banner) : ?>

				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
				<!-- Banner Image -->
				<?php $banner_image = $banner['banner_image']; ?>
				<?php if ($banner_image) : ?>
					<?php
					$img_url = $banner_image['url'];
					?>
					<div class="banner-img">
						<img src="<?php print_r(esc_url($img_url)); ?>">
					</div>
				<?php endif; ?>

				<!-- Banner Text -->
				<?php $banner_text = $banner['banner_text']; ?>
				<?php if ($banner_text) : ?>
					<p><?php _e($banner_text); ?></p>
				<?php endif; ?>

			<?php endif; ?>
		</div>



		<section class="educationcontent">


			<div class="slaughter">
				<!--title -->
				<?php $horse_slaughter_title = get_field('horse_slaughter_title'); ?>
				<?php if ($horse_slaughter_title) : ?>
					<h3><?php _e($horse_slaughter_title); ?></h3>
				<?php endif; ?>

				<!--title -->
				<?php $horse_slaughter_subheading = get_field('horse_slaughter_subheading'); ?>
				<?php if ($horse_slaughter_subheading) : ?>
					<h4><?php _e($horse_slaughter_subheading); ?></h4>
				<?php endif; ?>



				<!-- text -->
				<?php $horse_slaughter_title = get_field('horse_slaughter_text'); ?>
				<?php if ($horse_slaughter_title) : ?>
					<p><?php _e($horse_slaughter_title); ?></p>
				<?php endif; ?>
			</div>


			<div class="slaughter links">

				<div class="links">
					<!-- start the loop -->

					<div class="button links">
						<a class="slaughter info link" href="https://canadianhorsedefencecoalition.org/">Canadaian Horse Defence Coalition</a>
						<a class="mpletter link" href="https://banhorseslaughter.com/contact-your-mp-2/">write your MP</a>
						<a class="mpletter link" href="https://www.change.org/p/lawrence-macaulay-canada-stop-exporting-live-horses-for-slaughter">Sign the Petition</a>


					</div>

					<!-- end while loop -->
				</div>


			</div>

			<div class="media">
				<!--title -->
				<?php $media_title = get_field('media_title'); ?>
				<?php if ($media_title) : ?>
					<h3><?php _e($media_title); ?></h3>
				<?php endif; ?>

				<!-- text -->
				<?php $media_text = get_field('meida_text'); ?>
				<?php if ($media_text) : ?>
					<p><?php _e($media_text); ?></p>
				<?php endif; ?>

				<!-- text -->
				<?php $media_links = get_field('meida_links'); ?>
				<?php if ($media_links) : ?>
					<p><?php _e($media_links); ?></p>
				<?php endif; ?>


			</div>




			<div class="sanctuary animals">

				<div class="sanctuaryhorses">
					<!--title -->
					<?php $education_sanctuaryhorses_title = get_field('sanctuary_animals_title'); ?>
					<?php if ($education_sanctuaryhorses_title) : ?>
						<h3><?php _e($education_sanctuaryhorses_title); ?></h3>
					<?php endif; ?>

					<!-- text -->
					<?php $education_sanctuaryhorses_text = get_field('sanctuary_animals_text'); ?>
					<?php if ($education_sanctuaryhorses_text) : ?>
						<p><?php _e($education_sanctuaryhorses_text); ?></p>
					<?php endif; ?>
				</div>



			</div>
			<div class="compasionfund">

				<div class="compassionfund content">
					<!--title -->
					<?php $compassionfund_title = get_field('compassion_fund_title'); ?>
					<?php if ($compassionfund_title) : ?>
						<h3><?php _e($compassionfund_title); ?></h3>
					<?php endif; ?>

					<!-- text -->
					<?php $compassionfund_text = get_field('compassion_fund_text'); ?>
					<?php if ($compassionfund_text) : ?>
						<p><?php _e($compassionfund_text); ?></p>
					<?php endif; ?>
				</div>



			</div>


			<div class="therapy">

				<div class="therapy content">
					<!--title -->
					<?php $therapy_title = get_field('equine_therapy_title'); ?>
					<?php if ($therapy_title) : ?>
						<h3><?php _e($therapy_title); ?></h3>
					<?php endif; ?>

					<!-- text -->
					<?php $therapy_text = get_field('equine_therapy_text'); ?>
					<?php if ($therapy_text) : ?>
						<p><?php _e($therapy_text); ?></p>
					<?php endif; ?>
				</div>



			</div>

</main><!-- #main -->

<?php
get_footer();
