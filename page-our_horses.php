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

	<?php if (have_posts()) : ?>
		<!-- <header class="entry-header">
				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			</header>.entry-header -->

		<?php five_freedoms_ranch_post_thumbnail(); ?>

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
						<img src="<?php print_r(esc_url($img_url)); ?>">
					<?php endif; ?>

					<!-- Banner Text -->
					<?php $banner_text = $banner['banner_text']; ?>
					<?php if ($banner_text) : ?>
						<p><?php _e($banner_text); ?></p>
					<?php endif; ?>

				<?php endif; ?>
			</div>







<div class="our-horses">
	<?php $our_horses = get_field('our_horses_title'); ?>
	<?php if ($our_horses) : ?>
		<?php the_title('<h3 class="page-header">', '</h3>'); ?>
	
		<!-- Banner Text -->
		<?php $our_horses_text = $our_horses['banner_text']; ?>
		<?php if ($our_horses_text) : ?>
			<p><?php _e($our_horses_text); ?></p>
		<?php endif; ?>
	<?php endif; ?>
</div>
<!-- adoptable Horses -->

<?php
		$args = array(
			'post_type' => 'horses',
			'posts_per_page' => 8,
			'order' => 'ASC'
		);
		$adoptable_horses = new WP_Query($args);
?>
<?php
if ($adoptable_horses->have_posts()) ?>
<?php while ($adoptable_horses->have_posts()):$adoptable_horses->the_post(); ?>

<div class="adoptablehorse card">
	<img src="" alt="">
	<?php $horse_Profile get_field('horse_profile');?>
	<?php ?>
	

</div>













			<!-- our Horses -->
			<section class="our-horses">
				<?php $our_horses = get_field('our_horses_title'); ?>
				<?php if ($our_horses) : ?>



					<div class="our_horses">

						<?php $our_horses_title = $our_horses['our_horses_title']; ?>
						<?php if ($our_horses_title) : ?>
							<h3><?php _e($our_horses_title); ?></h3>
						<?php endif; ?>

						<!-- Text -->
						<?php $our_horses_text = $our_horses['our_horses_text']; ?>
						<?php if ($our_horses_text) : ?>
							<p><?php _e($our_horses_text); ?></p>
						<?php endif; ?>

					</div>



					<div class="adoptable">

						<!-- adoptable -->
						<?php $adoptable_horses_title = $our_horses['adoptable_horses_title']; ?>
						<?php if ($adoptable_horses_title) : ?>
							<h3><?php _e($adoptable_horses_title); ?></h3>
						<?php endif; ?>

						<!-- Text -->
						<?php $adoptable_horses_text = $our_horse['adoptable_horses_text']; ?>
						<?php if ($adoptable_horses_text) : ?>
							<p><?php _e($adoptable_horses_text); ?></p>
						<?php endif; ?>

					</div>

					<!-- adoptable horses -->
					<?php
					$args = array(
						'post_type' => 'horses',
						'posts_per_page' => 8,
						'order' => 'ASC'
					);
					$adoptable_horses = new WP_Query($args);
					?>

					<?php if ($our_horses->have_posts()) : ?>
						<div class="adoptable_horses">
							<!-- start the loop -->
							<?php while ($our_horses->have_posts()) : $our_horses->the_post(); ?>
								<div class="adoptable-horse-card">
									<a class="adoptable-horse-title" href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>
									<?php $horse_age = get_field('horse_age'); ?>
									<?php if ($horse_age) : ?>
										<p class="adoptable-horse-card-text"><?php _e($horse_age); ?></p>
									<?php endif; ?>
									<?php $horse_gender = get_field('horse_gender'); ?>
									<?php if ($horse_gender) : ?>
										<p class="adoptable-horse-card-text"><?php _e($horse_gender); ?></p>
									<?php endif; ?>
								</div>


							<?php endwhile; ?>
							<!-- end while loop -->
						</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				<?php endif; ?>
			</section>





		<div class="sanctuary">

						<!-- adoptable -->
						<?php $sanctuary_horses_title = $our_horses['sanctuary_horses_title']; ?>
						<?php if ($sanctuary_horses_title) : ?>
							<h3><?php _e($sanctuary_horses_title); ?></h3>
						<?php endif; ?>

						<!-- Text -->
						<?php $sanctuary_horses_text = $our_horses['sanctuary_horses_text']; ?>
						<?php if ($sanctuary_horses_text) : ?>
							<p><?php _e($sanctuary_horses_text); ?></p>
						<?php endif; ?>

					</div>

					<!-- horse profiles-sanctuary -->
					<?php
					$args = array(
						'post_type' => 'horses',
						'posts_per_page' => 8,
						'order' => 'ASC'
					);
					$our_horses = new WP_Query($args);
					?>

					<?php if ($our_horses->have_posts()) : ?>
						<div class="sanctuary_horses">
							<!-- start the loop -->
							<?php while ($our_horses->have_posts()) : $our_horses->the_post(); ?>
								<div class="sanctuary-horse-card">
									<a class="sanctuary-horse-title" href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>
									<?php $horse_age = get_field('horse_age'); ?>
									<?php if ($horse_age) : ?>
										<p class="sanctuary-horse-card-text"><?php _e($horse_age); ?></p>
									<?php endif; ?>
									<?php $horse_gender = get_field('horse_gender'); ?>
									<?php if ($horse_gender) : ?>
										<p class="sanctuary-horse-card-text"><?php _e($horse_gender); ?></p>
									<?php endif; ?>
								</div>


							<?php endwhile; ?>
							<!-- end while loop -->
						</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				<?php endif; ?>
			</section>
			
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'five-freedoms-ranch'),
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
