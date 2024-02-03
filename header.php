<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	wp_head();
	$page_logo = get_field('logo', 'option');
	?>
</head>

<body>
	<div id="header" class="w-full z-30">
		<div class="container relative w-full flex flex-wrap py-2 xl:py-1 min-h-[60px] md:min-h-[85px]">
			<div class="absolute z-10 left-0 w-full hidden md:flex justify-start  items-center md:static md:w-2/12">
				<a class="pl-2 md:p-0" href="<?php echo home_url('/'); ?>" aria-label="Ir a la pagina inicio">
					<div class="logo">
						<img width="100%" height="auto" src="<?php echo $page_logo; ?>" alt="Logotipo de la compañía">
					</div>
				</a>
			</div>
			<div class="relative z-20 hidden md:flex justify-end items-center w-full md:w-10/12">
				<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>
			</div>
			<div class="md:hidden w-full flex justify-start items-center">
				<a class="md:p-0" href="http://corpofalcon.local/" aria-label="Ir a la pagina inicio">
					<div class="logo">
						<img width="100%" height="auto"
							src="http://corpofalcon.local/wp-content/uploads/2024/01/logo_header-1-e1706108359631.webp"
							alt="Logotipo de la compañía">
					</div>
				</a>
				<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>
			</div>
		</div>
	</div>