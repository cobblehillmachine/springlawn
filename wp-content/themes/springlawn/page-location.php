<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
			<div class="location-info"><?php the_content(); ?></div>

		</div>

		<div class="col-right">
			<?php the_post_thumbnail('full'); ?>
		</div>
		
		<div class="cont box">
			<h2>Surrounding Attractions</h2>
			<div class="span3"><?php the_field('surrounding_attractions_col1'); ?></div>
			<div class="span3"><?php the_field('surrounding_attractions_col2'); ?></div>
			<div class="span3"><?php the_field('surrounding_attractions_col3'); ?></div>
		</div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>