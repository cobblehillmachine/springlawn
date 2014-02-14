<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="col-left">
			<div class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></div>
			<div class="cont left-img"><?php the_post_thumbnail('full'); ?></div>

		</div>

		<div class="col-right">
			<?php the_content(); ?>
		</div>
		
		<div class="cont box">
			<p><strong>Founding Stewardship Investment Comparison</strong></p>
			<table class="table">
				<thead>
					<th>year</th>
					<th>lenox comps</th>
					<th>berkshire legacy circle</th>
				</thead>
				<tbody>
				<?php query_posts(array('post_type' => 'Investments',  'order' => 'asc')); ?>
				<?php while ( have_posts() ) : the_post();  ?>
					<tr class="member-cont">
						<td><?php the_title(); ?></td>
						<td><?php the_field('lenox_comps'); ?></td>
						<td><?php the_field('berkshire'); ?></td>
					</tr>
				<?php endwhile; wp_reset_query(); ?>
				</tbody>
			</table>
			<div class="bottom-cont">
				<?php the_field('bottom_copy'); ?>
			</div>
		</div>
		


	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>