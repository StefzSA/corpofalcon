<?php
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
<div id="section_1">
    <div class="section_wrap container mx-auto w-full">
        <div class="section_content flex flex-wrap">
            <div class="w-full">
                <h2 class="w-full font-bold text-3xl md:text-4xl text-secondary-500 text-center tracking-wide pb-16">Nuestros
                    servicios</h2>
            </div>
            <a href="#" class="w-10/12 md:w-[29%]">
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
            <a href="#" class="w-10/12 md:w-[29%]">
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
            <a href="#" class="w-10/12 md:w-[29%]">
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