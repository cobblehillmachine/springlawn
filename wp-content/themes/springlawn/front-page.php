<?php get_header(); ?>
	<div class="mid-cont">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
		<div class="cont">
			<div class="image-cont">
				<?php the_post_thumbnail('full'); ?>
					
				<?php the_post_thumbnail_caption(); ?>
			</div>
			<div class="text"><?php the_content(); ?></div>
		</div>
	<?php endwhile; ?>
	</div>
	<div id="cta-cont" class="cont">
		<div class="mid-cont">
		<?php query_posts(array('post_type' => 'Home CTAs',  'order' => 'asc')); ?>
		<?php while ( have_posts() ) : the_post();  ?>
			<a class="cta" href="<?php the_field('link_url'); ?>">
				<div class="cta-img" ><div class="inner-border"></div><?php the_post_thumbnail('full'); ?></div>
				<div class="cta-title"><?php the_title(); ?></div>
				<div class="contact-info"><?php the_content(); ?></div>
				<span class="learn-more">Learn more <span class="arrow">d</span></span>
			</a>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
	
	<div class="mid-cont">
		<div id="contacts">
			<?php query_posts(array('post_type' => 'Members',  'order' => 'asc')); ?>
			<?php while ( have_posts() ) : the_post();  ?>
				<div class="member-cont">
					<h3><?php the_title(); ?></h3>
					<div class="contact-info"><?php the_content(); ?></div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
	
	<div class="legal-info cont"><?php echo get_the_excerpt(); ?></div>

	

<?php get_footer(); ?>