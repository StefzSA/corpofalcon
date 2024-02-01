<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php 
	wp_head(); 
	$page_logo = get_field('logo', 'option');
	?>
	<style> #header{ .logo { background-image: url('<?php echo $page_logo; ?>'); } }</style>
</head>

<body>
	<div id="header" class="w-full m-auto z-30">
		<div class="container w-full nav mx-auto w-full flex flex-wrap py-2 xl:py-1">
			<div class="w-full md:w-2/12 justify-center md:justify-start logo_wrapper">
				<a href="<?php echo home_url('/'); ?>">
					<div class="logo"></div>
				</a>
			</div>
			<div class="flex justify-end items-center w-full md:w-10/12">
				<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>
			</div>
		</div>
	</div>