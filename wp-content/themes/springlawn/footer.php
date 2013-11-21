<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
				<?php if(is_front_page()) {?>
					<?php } else { ?>
					</div>
					<?php } ?>
			
		</div>
		<div id="footer">
			<div class="mid-cont">
				<div id="copyright">&copy; 2013 BERKSHIRE LEGACY CIRCLE, ALL RIGHTS RESERVED</div>
				<li><a href="mailto:INFO@BERKSHIRELEGACYCIRCLE.COM" target="_blank">INFO@BERKSHIRELEGACYCIRCLE.COM</a></li>
				<li><a href="#" target="_blank">JOIN OUR NEWSLETTER</a></li>
			</div>
		</div>
<?php wp_footer(); ?>
</body>
</html>