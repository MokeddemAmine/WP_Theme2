<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my-woocommerce-thme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="container pt-4 pb-5">
			<div id="carouselShop" class="carousel slide overflow-hidden rounded">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselShop" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselShop" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri() ?>/imgs/slider/slider1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri() ?>/imgs/slider/slider2.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselShop" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselShop" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

	</main>

<?php
get_footer();
