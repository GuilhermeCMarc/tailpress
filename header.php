<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Baloo 2 Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Swiper JS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>
</head>

<?php
$page = null;

if (is_front_page()) $page = 'home';
if (is_page(20)) $page = 'podcasts';
?>

<body <?php body_class('bg-white text-gray-400 antialiased font-sans ' . $page); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col <?php echo $page == 'podcasts' ? 'bg-gray-800' : '' ?>">

		<?php do_action('tailpress_header'); ?>

		<header class="z-50">

			<div class="mx-auto container">
				<div class="relative lg:flex lg:justify-between lg:items-center py-6">
					<div class="flex justify-between items-center">
						<div>
							<a href="<?php echo home_url() ?>">
								<div class="flex items-center">
									<div class="bg-white shadow-2xl rounded-full w-16 h-16 relative">
										<img class="w-8 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php bloginfo('template_url') ?>/images/logo.svg" alt="Hipopótamo de Biquíni">
									</div>

									<h4 class="font-bold ml-4 text-gray-700 title">Hipopótamo de Biquíni</h4>
								</div>
							</a>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M17.3333 8H1.33333C0.597083 8 0 8.59708 0 9.33333V10.6667C0 11.4029 0.597083 12 1.33333 12H17.3333C18.0696 12 18.6667 11.4029 18.6667 10.6667V9.33333C18.6667 8.59708 18.0696 8 17.3333 8ZM17.3333 0H1.33333C0.597083 0 0 0.597083 0 1.33333V2.66667C0 3.40292 0.597083 4 1.33333 4H17.3333C18.0696 4 18.6667 3.40292 18.6667 2.66667V1.33333C18.6667 0.597083 18.0696 0 17.3333 0Z" fill="<?php echo $page === 'podcasts' ? 'white' : 'black' ?>" />
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => $page . ($page == 'podcasts' ? ' bg-gray-900' : ' bg-gray-100') . ' hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block rounded-lg',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4 text-lg',
							'fallback_cb'     => false,
						)
					);
					?>

					<img id="menu-close" src="<?php bloginfo('template_url') ?>/images/close.svg" alt="Fechar" class="hidden absolute h-5 w-5 top-8 right-4">
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>