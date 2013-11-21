<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>

			<div class="cont box">

			</div>

		</div>

		<div class="col-right">
			<?php the_content(); ?>
			<div id="contact-form"><?php echo do_shortcode('[contact-form-7 id="96" title="Contact Form"]'); ?></div>
		</div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>