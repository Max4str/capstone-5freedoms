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



		<section class="ourhorses">

			<div class="meetourhorses">
				<!--title -->
				<?php $meethorsestitle = get_field('our_horses_title'); ?>
				<?php if ($meethorsestitle) : ?>
					<h3><?php _e($meethorsestitle); ?></h3>
				<?php endif; ?>

				<!-- text -->
				<?php $meethorsestext = get_field('our_horses_text'); ?>
				<?php if ($meethorsestext) : ?>
					<p><?php _e($meethorsestext); ?></p>
				<?php endif; ?>
			</div>

			<div class="adoptable-horses">
				<!--title -->
				<?php $adoptablehorsestitle = get_field('adoptable_horses_title'); ?>
				<?php if ($adoptablehorsestitle) : ?>
					<h3><?php _e($adoptablehorsestitle); ?></h3>
				<?php endif; ?>

				<!-- text -->
				<?php $adoptablehorsestext = get_field('adoptable_horses_text'); ?>
				<?php if ($adoptablehorsestext) : ?>
					<p><?php _e($adoptablehorsestext); ?></p>
				<?php endif; ?>
			</div>

			<?php
			$args = array(
				'post_type' => 'adoptable_horses',
				'posts_per_page' => 8,
				'order' => 'ASC'
			);
			$adoptable = new WP_Query($args);
			?>
			<?php if ($adoptable->have_posts()) : ?>
				<div class="adoptable">
					<!-- start the loop -->
					<?php while ($adoptable->have_posts()) : $adoptable->the_post(); ?>
						<!-- Card Info -->
						<div class="adoptable-card">
							<?php $horseimage = get_field('adoptable_horse_img'); ?>
							<?php if ($horseimage) : ?>
								<?php
								$img_url = $horseimage['url'];
								?>
								<div class="img-circle">
									<img src="<?php print_r(esc_url($img_url)); ?>">
								</div>
							<?php endif; ?>

							<!-- Title -->
							<?php get_field('horse_name'); ?>
							<!-- text -->
							<?php $horsename = get_field('horse_name'); ?>
							<?php if ($horsename) : ?>
								<h4><?php _e($horsename); ?></h4>
							<?php endif; ?>

							<!-- text -->
							<?php $horseage = get_field('horse_age'); ?>
							<?php if ($horseage) : ?>
								<p><?php _e($horseage); ?></p>
							<?php endif; ?>

							<!-- text -->
							<?php $horsesex = get_field('horse_gender'); ?>
							<?php if ($horsesex) : ?>
								<p><?php _e($horsesex); ?></p>
							<?php endif; ?>

							<!-- Learn More -->
							<a class="btn-link" href="<?php the_permalink(); ?>">learn more</a>

							<?php //get_template_part( 'template-parts/content', 'page' ); 
							?>
						</div>
					<?php endwhile; ?>
					<!-- end while loop -->
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			

			<div class="sanctuaryhorses">

				<!-- Title -->
				<?php $permanant_rescues_title = get_field('permanant_rescues_title'); ?>
				<?php if ($permanant_rescues_title) : ?>
					<h3><?php _e($permanant_rescues_title); ?></h3>
				<?php endif; ?>

				<!-- text -->
				<?php $permanant_rescues_text = get_field('permanant_rescues_text'); ?>
				<?php if ($permanant_rescues_text) : ?>
					<p><?php _e($permanant_rescues_text); ?></p>
				<?php endif; ?>
			</div>
			<?php
			$args = array(
				'post_type' => 'sanctuary_horse',
				'posts_per_page' => 8,
				'order' => 'ASC'
			);
			$sanctuary = new WP_Query($args);
			?>


		</section>




</main><!-- #main -->

<?php
get_footer();
?>