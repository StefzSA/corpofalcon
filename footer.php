<?php
$page_logo = get_field('logo', 'option');
?>
<div id="footer" class="relative z-50 bg-gradient-to-b from-white to-secondary-200 min-h-[400px] flex items-center">
	<div class="container mx-auto">
		<div class="w-full flex flex-wrap">
			<div class="w-full md:w-2/4 p-3 flex">
				<div class="w-full flex flex-col flex-wrap text-base px-3 py-4">
					<div class="mb-8 md:mb-4">
						<a href="<?php echo home_url('/')?>">
							<img class="mx-auto md:mx-0 md:max-h-[128px] md:max-w-[128px]" src="<?php echo $page_logo; ?>" alt="Logotipo de la compañía">
						</a>
					</div>
					<div class="text-xl mb-4">
						<h3>Contáctanos</h3>
					</div>
					<div class="text-dark_component-400"><a href="tel:"></a></div>
					<div class="w-8/12 text-secondary-500 mb-2">
						<p>Impulsando el desarrollo de Falcon</p>
					</div>
					<div class="text-dark_component-500 mb-6"><a href="mailto:corpofalcon.informatica@gmail.com">corpofalcon.informatica@gmail.com</a></div>
					<div class="text-secondary-500 text-2xl"><a href="https://instagram.com/corpofalcon"><i class="fa-brands fa-instagram"></i></a></div>
				</div>
			</div>
			<div class="w-full md:w-1/4 p-3">
				<div class="w-full flex flex-wrap px-3 py-4">
					<div class="w-full text-xl mb-4">
						<h3>Links</h3>
					</div>
					<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_3')); ?>
				</div>
			</div>
			<div class="w-full md:w-1/4 p-3">
				<div class="w-full flex flex-wrap px-3 py-4">
					<div class="w-full text-xl mb-4">
						<h3>Servicios</h3>
					</div>
					<?php wp_nav_menu(array('theme_location' => 'max_mega_menu_4')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>