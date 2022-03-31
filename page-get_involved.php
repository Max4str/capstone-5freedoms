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

			<section>
				<?php the_content(); ?>
			</section>



			<section class="getinvolved">

			<?php $getinvolved = get_field('get_involved_content'); ?>
				<?php if($donate_options): ?>

		<div class="get-involved-content">
			<!--title -->
				<?php $get_involved_title = get_field('get_involved_title'); ?>
				<?php if($get_involved_title): ?>
					<h3><?php _e($get_involved_title); ?></h3>
				<?php endif; ?>


			<!-- text -->
				<?php $get_involved_intro = $get_involved['intro']; ?>
				<?php if($get_involved_intro): ?>
					<p><?php _e($get_involved_intro); ?></p>
				<?php endif; ?>
		</div>

		
			<?php
							$args = array(
								'post_type' => 'donate_options',
								'posts_per_page' => 2,
								'order' => 'ASC'
							);
							$volunteer = new WP_Query($args);
						?>

		<div class="volunteer options">
					<?php if($get_involved->have_posts()) : ?>
							<div class="volunteer-options">
								<!-- start the loop -->
								<?php while($get_involved->have_posts()) : $get_involved->the_post(); ?>
									<div class="volunteer card">
										<h4 class="volunteer-title" href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></h4>
										<?php $volunteer_description = get_field('volunteer_description'); ?>
										<?php if($volunteer_description): ?>
											<p class="volunteer text"><?php _e($volunteer_description); ?></p>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
								<!-- end while loop -->
							</div>
						<?php endwhile; ?>

		</div>
		<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					<?php endif; ?>

			</section>




<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'five-freedoms-ranch' ),
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
