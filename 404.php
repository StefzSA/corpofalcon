<?php 
get_header(); 
$page_logo = get_field('logo', 'option');
?>

<main class="bg-white h-full flex items-center min-h-[70vh]">
    <div class="container mx-auto flex flex-wrap flex-col justify-center items-center">
    <img class="w-8/12 md:w-3/12" src="<?php echo $page_logo;?>" alt="Logotipo de la compañía">
    <h1 class="text-5xl text-tertiary-500 mt-12 text-center">¡Parece que la página que buscas no existe!</h1>
    <a class="text-secondary-500 text-xl mt-6 text-center underline" href="<?php echo home_url()?>">De vuelta al Inicio</a>
    </div>   
</main>

<?php get_footer(); ?>
