<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>

			<div id="contacts-info"class="cont box">
				
					<?php query_posts(array('post_type' => 'Members',  'order' => 'asc')); ?>
					<?php while ( have_posts() ) : the_post();  ?>
						<div class="member-cont">
							<h3><?php the_title(); ?></h3>
							<div class="contact-info"><?php the_content(); ?></div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				

			</div>

		</div>

		<div class="col-right">
			<?php the_content(); ?>
			<div id="contact-form"><?php echo do_shortcode('[contact-form-7 id="96" title="Contact Form"]'); ?></div>
		</div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>