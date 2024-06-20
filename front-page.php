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

		<section class="container">
			<h2 class="text-center pt-5 text-capitalize">popular products</h2>
			<p class="text-center">
				We offer a number of high quality toyes to help keep
				<br>
				your pets healthy and spoiled!
			</p>
			<div class="py-5">
				<?php echo do_shortcode('[products columns=4 limit=4]') ?>
			</div>
		</section>

		<section class="categories py-5 bg-secondary">
			<div class="container">
				<h2 class="text-center pt-5 text-capitalize">categories</h2>
				<p class="text-center">
					We offer a number of high quality toyes to help keep
					<br>
					your pets healthy and spoiled!
				</p>
			
				<div class="row pt-5">
					<div class="categories__col col-md-4 p-2" >
						<div class="overflow-hidden rounded h-100" style="position:relative;">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/categories/toys.jpg" alt="..." class="position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100" loading="lazy"/>
							<h3 class="bg-primary text-white text-center py-1 position-absolute bottom-0 m-0 left-0 right-0 w-100">Toys</h3>
						</a>
						</div>
					</div>
					<div class="categories__col col-md-4 p-2">
						<div class="overflow-hidden rounded h-100" style="position:relative;">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/categories/food.jpg" alt="..." class="position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100" loading="lazy"/>
							<h3 class="bg-primary text-white text-center py-1 position-absolute bottom-0 m-0 left-0 right-0 w-100">Food</h3>
						</a>
						</div>
					</div>
					<div class="categories__col col-md-4 p-2">
						<div class="overflow-hidden rounded h-100" style="position:relative;">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/categories/care.jpg" alt="..." class="position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100" loading="lazy"/>
							<h3 class="bg-primary text-white text-center py-1 position-absolute bottom-0 m-0 left-0 right-0 w-100">Care</h3>
						</a>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="categories__col col-md-4 p-2">
						<div class="overflow-hidden rounded h-100" style="position:relative;">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/categories/accessories.jpg" alt="..." class="position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100" loading="lazy"/>
							<h3 class="bg-primary text-white text-center py-1 position-absolute bottom-0 m-0 left-0 right-0 w-100">Accessories</h3>
						</a>
						</div>
					</div>
					<div class="categories__col col-md-8 p-2">
						<div class="overflow-hidden rounded h-100" style="position:relative;">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/categories/special-offers.jpg" alt="..." class="position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100" loading="lazy"/>
							<h3 class="bg-danger text-white text-capitalize py-1 position-absolute top-0 bottom-0 m-0 left-0 right-0 w-100 d-flex flex-column justify-content-center align-items-center">
								<span class="fs-1 d-block mb-2">special offers</span>
								<span class="fs-4 d-block">UP TO 40% OFF</span>
							</h3>
						</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="container pt-5">
			<h2 class="text-center pt-5 text-capitalize">special offers</h2>
			<p class="text-center">
				We offer a number of high quality toyes to help keep
				<br>
				your pets healthy and spoiled!
			</p>
			<div class="py-5">
				<?php echo do_shortcode('[sale_products]') ?>
			</div>
		</section>

	</main>

<?php
get_footer();
