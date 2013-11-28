<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
			<div id="llc-logo" class="cont"><?php the_post_thumbnail('full'); ?></div>

		</div>

		<div class="col-right">
			<?php the_content(); ?>
		</div>
		
		<div id="board" class="cont box">
			<h2>Board Members</h2>
			<div class="cont">
				<?php query_posts(array('post_type' => 'Board Members',  'order' => 'asc')); ?>
				<?php while ( have_posts() ) : the_post();  ?>
					<div class="member-cont cont">
						<div class="member-tab cont">
							<strong><?php the_title(); ?></strong>
							<span><?php the_field('tagline'); ?></span>
						</div>
						<div class="contact-info cont"><?php the_content(); ?></div>
					</div>
				<?php endwhile; wp_reset_query(); ?>
				
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>