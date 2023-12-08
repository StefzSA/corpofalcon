<?php
/*
 * Template Name: Home
 */

get_header();
?>
<style>
    .item_wrap>*:first-child {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 250px;
        width: 100%;
    }

    .item_img_1 {
        background-image: url('http://localhost/corpofalcon/wp-content/uploads/2023/12/maxresdefault.jpg');
    }

    .item_img_2 {
        background-image: url('http://localhost/corpofalcon/wp-content/uploads/2023/12/81711191_1273713379483820_5925384770446950400_n.jpg');
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
                        <p>Nuestra misión es promover el desarrollo armónico e integral del estado Falcón, a través de la ejecución, promoción, planificación, coordinación, financiamiento y evaluación de programas y proyectos.</p>
                    </div>
                    <div class="cta w-full">
                        <button><a href="#">Obtener Informacion</a></button>
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
            <div class="section_content">
                <div class="item_wrap w-3/12">
                    <div class="item_img_1">
                    </div>
                    <div class="item_title">
                        <h2>Lorem Ipsum, dor sit amet consectetur.</h2>
                    </div>
                    <div class="item_description">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic adipisci, similique asperiores tempore vero quidem iste provident vitae, distinctio magni quisquam. Explicabo assumenda repellendus quas molestias quia aliquam, tenetur incidunt.</p>
                    </div>
                </div>
                <div class="item_wrap w-3/12">
                    <div class="item_img_2">
                    </div>
                    <div class="item_title">
                        <h2>Lorem Ipsum, dor sit amet consectetur.</h2>
                    </div>
                    <div class="item_description">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic adipisci, similique asperiores tempore vero quidem iste provident vitae, distinctio magni quisquam. Explicabo assumenda repellendus quas molestias quia aliquam, tenetur incidunt.</p>
                    </div>
                </div>
                <div class="item_wrap w-3/12">
                    <div class="item_img_3">
                    </div>
                    <div class="item_title">
                        <h2>Lorem Ipsum, dor sit amet consectetur.</h2>
                    </div>
                    <div class="item_description">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic adipisci, similique asperiores tempore vero quidem iste provident vitae, distinctio magni quisquam. Explicabo assumenda repellendus quas molestias quia aliquam, tenetur incidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>