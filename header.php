<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package whitestone
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e('Skip to content', 'whitestone'); ?>
	</a>

	<header id="masthead" class="site-header">

		<!-- Site Branding -->
		<div class="site-branding">
			<?php
			$image_url = wp_get_attachment_url(25);
			if ($image_url): ?>
				<img src="<?php echo esc_url($image_url); ?>" alt="Whitestone Logo">
			<?php endif; ?>
		</div>

		<!-- Mobile Menu -->
		<div class="mobile-menu">
			<button id="mobile-menu-toggle" aria-label="Toggle mobile menu">
				<i class="fas fa-bars"></i>
			</button>

			<nav id="mobile-nav" class="mobile-navigation">
				<?php
				wp_nav_menu([
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile-menu',
				]);
				?>
				<div class="button-wrap">
					<button id="home-sale-btn">Homes For Sale</button>
				</div>
			</nav>
		</div>

		<!-- Desktop Menu -->
		<div class="menu-head">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu([
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				]);
				?>
			</nav>
			<div class="button-wrap">
				<button id="home-sale-btn">Homes For Sale</button>
			</div>
		</div>

	</header><!-- #masthead -->
