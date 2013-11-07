<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
	<div class="excerpt"><?php the_excerpt(); ?></div>
	<div class="image"><?php the_post_thumbnail('full'); ?></div>
	<div class="text"><?php the_content(); ?></div>

	<?php endwhile; ?>
	

<?php get_footer(); ?>