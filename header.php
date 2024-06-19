<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-woocommerce-thme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-woocommerce-thme' ); ?></a>

	<div class="announcement-bar py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 d-flex justify-content-center justify-content-lg-start mb-2 mb-lg-0">
					<ul class="list-unstyled announcement-bar__list">
						<li>
							<i class="bi bi-telephone rounded-circle"></i>
							<a href="tel: +213 655069573">+213 655069573</a>
						</li>
						<li>
							<i class="bi bi-envelope rounded-circle"></i>
							<a href="mailto:mokeddemamine1707@gmail.com">shop@commerce.shop</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-8 d-flex justify-content-center justify-content-lg-end">
					<ul class="list-unstyled row announcement-bar__list">
						<li class="col-sm mb-2 justify-content-center mb-sm-0 justify-content-sm-start">
							<i class="bi bi-truck rounded-circle"></i>
							Free Eu Shipping
						</li>
						<li class="col-sm mb-2 justify-content-center mb-sm-0 justify-content-sm-start">
							<i class="bi bi-clock-history rounded-circle"></i>
							30 Days MoneyBack Guarantee
						</li>
						<li class="col-sm mb-2 justify-content-center mb-sm-0 justify-content-sm-start">
							<i class="bi bi-person rounded-circle"></i>
							24/7 Customer Support
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="container pt-2 pb-2">
			<div class="row align-items-center">
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start">
					<?php the_custom_logo() ?>
				</div>
				<div class="col-md-5">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center ">
					<a href="<?php echo wc_get_cart_url() ?>" class="bi bi-bag-dash p-2 text-primary"></a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Primary Menu', 'my-woocommerce-thme' ); ?>
						</button>
					</div>
					<div class="col-12 text-center">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
				</div>
			</div>
		</nav>
	</header>
