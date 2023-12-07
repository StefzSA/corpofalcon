<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>

<body>
	<div id="header" class="w-full m-auto z-10">
		<div class="container w-full nav mx-auto">
			<div class="w-full xl:w-2/12 justify-center md:justify-start logo_wrapper">
				<a href="<?php echo home_url('/'); ?>">
					<div class="logo"></div>
				</a>
			</div>
			<div class="flex justify-end items-center xl:w-10/12 w-full">
				<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>
			</div>
		</div>
	</div>