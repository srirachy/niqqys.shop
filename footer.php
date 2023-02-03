<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package niqqys
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-footer bg-primary text-white pb-4 pt-4">
			<div class="row-footer mx-5">
				<div class="col-footer">
					<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
				</div>
				<div class="col-footer">
					<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
				</div>
				<div class="col-footer">
					<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
				</div>
			</div>
		</div>
		<div class="container-copyright bg-white">
			<div class="row-copyright">
				<div class="col-copyright">
					<p class="p-4">&copy;<?php bloginfo('name');?> <?php echo date('Y');?> / Created by <a href="https://google.com" target="_blank">srirachy</a></p>
				</div>
				<div class="col-copyright">
					<img src="<?php echo get_template_directory_uri(  );?>/img/footer/payment-methods.png" class="img-fluid" alt="..." loading="lazy">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
