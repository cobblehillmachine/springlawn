<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
	<div class="excerpt"><?php the_excerpt(); ?></div>
	<div class="image"><?php the_post_thumbnail('full'); ?></div>
	<div class="text"><?php the_content(); ?></div>
	
	<div class="brown-cont">
		<div id="signup-cont" class="small-cont"><?php get_sidebar(); ?></div>
		<div id="brochure-cont" class="small-cont">
			<h3>want to learn more?</h3>
			<a class="button" href="#"><span>view our brochure</span></a>
		</div>
	</div>
	<?php endwhile; ?>
	<div id="contact-form">
		<h3>Interested in becoming a founding steward?</h3>
		<div class="contact-title">Contact Us For More Information</div>
		<?php echo do_shortcode('[contact-form-7 id="5" title="Splash"]'); ?>
	</div>
	
	<div id="contacts">
		<?php query_posts(array('post_type' => 'Members',  'order' => 'asc')); ?>
		<?php while ( have_posts() ) : the_post();  ?>
			<div class="member-cont">
				<h3><?php the_title(); ?></h3>
				<div class="contact-info"><?php the_content(); ?></div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>

	

<?php get_footer(); ?>