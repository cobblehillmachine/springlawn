<div class="col-left">
	<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
	<div class="lifestyle-menu cont"><?php wp_nav_menu( array( 'menu' => 'Lifestyle' ) ); ?></div>
	<?php if(is_page('The Lenox Area')) { ?>
	<div class="cont box">
		<a class="link-button" href="/location">View Map of Lenox, MA</a>
	</div>
	<div class="cont box">
		<?php echo do_shortcode('[metaslider id=62]'); ?>
	</div>
	<div id="stock-images" class="cont box">
		<?php the_field('stock_images'); ?>
	</div>
	<?php } else { ?>
	<?php } ?>
</div>

<div class="col-right">
	<?php the_content(); ?>
</div>

<?php if(is_page('The Lifestyle')) { ?>
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
		<?php the_field('benefits_info'); ?>
	</div>
	
</div>
<?php } else if(is_page('The Lenox Area')) { ?>
	<div id="outdoor-pursuit" class="popup">
		<div class="close" onclick="closePopup();">x</div>
		<strong>outdoor pursuits</strong>
		<?php the_field('outdoor_pursuits'); ?>
	</div>
	<div id="attractions" class="popup">
		<div class="close" onclick="closePopup();">x</div>
		<strong>cultural attractions</strong>
		<?php the_field('cultural_attractions'); ?>
	</div>
	
<?php } else if(is_page('Stewardship Amenities')) { ?>
	<div class="cont box">
		<div class="cont left">
			<?php the_field('membership_info'); ?>
		</div>
		<div class="cont right">
			<?php the_post_thumbnail('full')?>
		</div>
	</div>
	<div class="cont box">
		<div class="cont left">
			<?php the_field('room_rates'); ?>
		</div>
		<div class="cont right">
			<?php the_field('slide_images'); ?>
		</div>
	</div>
<?php } ?>

