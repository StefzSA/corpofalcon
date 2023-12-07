<?php
/*
 * Template Name: Home
 */

get_header();
?>

<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
    <div id="hero-section" class="img-bg">
        <div class="overlay">
            <div class="mask"></div>
        </div>
        <div class="columns container w-full mx-auto relative z-auto h-full">
            <div class="flex flex-wrap w-full h-full items-center">
                <div class="left w-8/12">
                    <div class="title w-full">
                        <h1>Impulsando el desarrollo de Falcón</h1>
                    </div>
                    <div class="description w-full">
                        <p>Nuestra misión es promover el desarrollo armónico e integral del estado Falcón, a través de la ejecución, promoción, planificación, coordinación, financiamiento y evaluación de programas y proyectos.</p>
                    </div>
                    <div class="cta w-full">
                        <button><a href="#">Obtener Informacion</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>