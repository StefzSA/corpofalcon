<?php
/*
 * Template Name: Home
 */

get_header();
?>
<style>
    #section_1 {
        .item_wrap>*:first-child {
            position: absolute;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: calc(100% - 4px);
            width: calc(100% - 4px);
            overflow: hidden;
        }

        .item_img_1 {
            background-image: url('http://localhost/corpofalcon/wp-content/uploads/2023/12/pexels-anna-shvets-4482900-scaled.jpg');
        }

        .item_img_2 {
            background-image: url('http://localhost/corpofalcon/wp-content/uploads/2023/12/pexels-christina-morillo-1181396-scaled.jpg');
        }

        .item_img_3 {
            background-image: url('http://localhost/corpofalcon/wp-content/uploads/2023/12/medanos.jpg');
        }
    }
</style>

<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
    <div class="overlay light"></div>
    <div id="hero-section">
        <div id="hero-bg" class="img-bg"></div>
        <div class="mask"></div>
        <div class="columns container w-full mx-auto relative z-auto h-full">
            <div class="flex flex-wrap w-full h-full items-center">
                <div class="left w-full md:w-8/12">
                    <div class="title w-full">
                        <h1>Impulsando Falcón</h1>
                    </div>
                    <div class="description w-full">
                        <p>Nuestra misión es promover el desarrollo armónico e integral del estado Falcón, a través de
                            la ejecución, promoción, planificación, coordinación, financiamiento y evaluación de
                            programas y proyectos.</p>
                    </div>
                    <div class="cta dark-text w-full">
                        <button><a href="#">Obtener Información</a></button>
                    </div>
                </div>
                <div class="right w-full md:w-4/12">
                    <div class="hero_img">
                        <img src="http://localhost/corpofalcon/wp-content/uploads/2023/12/Group-1000003526.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_transition">
        <img src="http://localhost/corpofalcon/wp-content/uploads/2024/01/layered-waves-haikei-3-cropped.svg">
    </div>
    <div id="section_1">
        <div class="section_wrap container mx-auto w-full">
            <div class="section_content flex flex-wrap">
                <div class="w-full">
                    <h2 class="w-full font-bold text-6xl text-secondary-500 text-center tracking-wide pb-6">Nuestros
                        servicios</h2>
                </div>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_1">
                            <div class="overlay"></div>
                            <div class="item_title">
                                <h3>Financiamiento</h3>
                            </div>
                            <div class="item_icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                        </div>
                        <div class="item_content">
                            <div class="item_description">
                                <p><span class="item_highlight">¿Estás pensando en iniciar el negocio de tu vida?</span>
                                    Con nuestros servicios de financiamiento para
                                    emprendimientos, puedes obtener el capital que necesitas para hacer realidad tu
                                    sueño.
                                    Contamos con una amplia gama de opciones de financiamiento, adaptadas a tus
                                    necesidades
                                    y presupuesto.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_2">
                            <div class="overlay"></div>
                            <div class="item_title">
                                <h3>Salón Simón Bolivar</h3>
                            </div>
                            <div class="item_icon"><i class="fa-solid fa-calendar-check"></i></div>
                        </div>
                        <div class="item_content">
                            <div class="item_description">
                                <p><span class="item_highlight">¿Necesitas un espacio para tu próxima
                                        conferencia?</span> ¡Alquila uno de nuestros salones de conferencias!
                                    Nuestros salones son espaciosos y modernos, y están equipados con todo lo que
                                    necesitas para que
                                    tu evento sea un éxito.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_3">
                            <div class="overlay"></div>
                            <div class="item_title">
                                <h3>Salinas</h3>
                            </div>
                            <div class="item_icon"><i class="fa-solid fa-mountain-sun"></i></div>
                        </div>
                        <div class="item_content">
                            <div class="item_description">
                                <p><span class="item_highlight">¿Estás pensando en iniciar el negocio de tu vida?</span>
                                    Con nuestros servicios de financiamiento para
                                    emprendimientos, puedes obtener el capital que necesitas para hacer realidad tu
                                    sueño.
                                    Contamos con una amplia gama de opciones de financiamiento, adaptadas a tus
                                    necesidades
                                    y presupuesto.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>