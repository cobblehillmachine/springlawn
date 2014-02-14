<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
			<div class="cont left-img"><?php the_post_thumbnail('full'); ?></div>

		</div>

		<div class="col-right">
			<?php the_content(); ?>
		</div>
		


	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>