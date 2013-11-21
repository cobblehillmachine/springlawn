<div class="col-left">
	<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
	<div class="lifestyle-menu cont"><?php wp_nav_menu( array( 'menu' => 'Lifestyle' ) ); ?></div>
</div>
<div class="col-right">
	<?php the_content(); ?>
</div>

<div class="cont box">
	<div class="cont left">
		<?php the_field('info2'); ?>
	</div>
	<div class="cont right">
		<?php the_post_thumbnail('full')?>
		<div class="contact-info">
			<strong>Interested in learning more?</strong>
			<a class="button" href="contact-us">contact us</a>
		</div>
	</div>
	<div id="benefits" class="cont">
		<?php the_field('benefits_info')?>
	</div>
	
</div>