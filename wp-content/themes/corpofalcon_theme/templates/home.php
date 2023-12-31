<?php
/*
* Template Name: Home
*/

get_header();
?>
<style>
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
</style>

<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
    <div id="hero-section" class="img-bg">
        <div class="overlay">
            <div class="mask"></div>
        </div>
        <div class="columns container w-full mx-auto relative z-auto h-full">
            <div class="flex flex-wrap w-full h-full items-center">
                <div class="left w-full md:w-10/12">
                    <div class="title w-full">
                        <h1>Impulsando el desarrollo de Falcón</h1>
                    </div>
                    <div class="description w-full">
                        <p>Nuestra misión es promover el desarrollo armónico e integral del estado Falcón, a través de
                            la ejecución, promoción, planificación, coordinación, financiamiento y evaluación de
                            programas y proyectos.</p>
                    </div>
                    <div class="cta w-full">
                        <button><a href="#">Obtener Información</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_1">
        <div class="section_transition">
            <div class="custom-shape-divider-top-1702052748">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="section_wrap container mx-auto w-full">
            <div class="section_content flex flex-wrap">
                <div class="w-full">
                    <h2 class="w-full font-bold text-6xl text-tertiary-500 text-center tracking-wide">Servicios</h2>
                </div>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_1">
                            <div class="overlay"></div>
                            <div class="item_icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        </div>
                        <div class="item_content">
                            <div class="item_title">
                                <h2>Financiamiento</h2>
                            </div>
                            <div class="item_description">
                                <p><span class="item_highlight">¿Estás pensando en iniciar el negocio de tu vida?</span> Con nuestros servicios de financiamiento para
                                    emprendimientos, puedes obtener el capital que necesitas para hacer realidad tu sueño.
                                    Contamos con una amplia gama de opciones de financiamiento, adaptadas a tus necesidades
                                    y presupuesto.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_2">
                            <div class="overlay"></div>
                            <div class="item_icon"><i class="fa-solid fa-calendar-check"></i></div>
                        </div>
                        <div class="item_content">
                            <div class="item_title">
                                <h2>Salon Simon Bolivar</h2>
                            </div>
                            <div class="item_description">
                            <p><span class="item_highlight">¿Necesitas un espacio para tu próxima conferencia?</span> ¡Alquila uno de nuestros salones de conferencias!
                                Nuestros salones son espaciosos y modernos, y están equipados con todo lo que necesitas para que
                                tu evento sea un éxito.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-3/12">
                    <div class="item_wrap w-full">
                        <div class="item_img_3">
                            <div class="overlay"></div>
                            <div class="item_icon"><i class="fa-solid fa-cannabis"></i></div>
                        </div>
                        <div class="item_content">
                            <div class="item_title">
                                <h2>Salinas</h2>
                            </div>
                            <div class="item_description">
                                <p><span class="item_highlight">¿Estás pensando en iniciar el negocio de tu vida?</span> Con nuestros servicios de financiamiento para
                                    emprendimientos, puedes obtener el capital que necesitas para hacer realidad tu sueño.
                                    Contamos con una amplia gama de opciones de financiamiento, adaptadas a tus necesidades
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