<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-woocommerce-thme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white py-5">
			<div class="container">
				<div class="row text-center text-sm-start">
					<div class="col-lg-2 col-md-4 col-sm-6">
						<?php 
							if(is_active_sidebar('footer-widget')){
								dynamic_sidebar('footer-widget');
							}
						?>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
					<?php 
							if(is_active_sidebar('footer-widget-two')){
								dynamic_sidebar('footer-widget-two');
							}
						?>
					</div>
					<div class="col-md-4 ms-auto">
					<?php 
							if(is_active_sidebar('footer-widget-three')){
								dynamic_sidebar('footer-widget-three');
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-2">
			<div class="row d-flex align-items-center">
				<div class="col fw-bold">
					<p class="m-0">&copy; <?php bloginfo('name') ?> <?php echo date('Y') ?> / Created By Serine Alili</p>
				</div>
				<div class="col h-25 ms-auto text-end">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/payment-methods.png" class="img-fluid" loading="lazy" alt="">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
