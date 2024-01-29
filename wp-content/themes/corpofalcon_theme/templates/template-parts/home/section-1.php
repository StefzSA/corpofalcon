<?php
?>
<?php foreach($home_var['section_1_item'] as $section_1_item) { ?>
    <style>
        #section_1 {
            .item_img {
                background-image: url('<?php echo $section_1_item['background_image']; ?>');
            }
        }
    </style>
<?php } ?>
<div id="section_1">
    <div class="section_wrap container mx-auto w-full">
        <div class="section_content flex flex-wrap">
            <?php if(!empty($home_var['section_1_heading'])) { ?>
                <div class="w-full">
                    <h2 class="w-full font-bold text-3xl md:text-4xl text-secondary-500 text-center tracking-wide pb-16">
                        <?php echo $home_var['section_1_heading']; ?></h2>
                </div>
            <?php } ?>
            <?php 
            if(!empty($home_var['section_1_item'])) { 
                foreach($home_var['section_1_item'] as $section_1_item) { 
            ?>
                <a href="<?php echo $section_1_item['link']; ?>" class="w-10/12 md:w-[29%]">
                    <div class="item_wrap w-full">
                        <div class="item_img">
                            <div class="overlay"></div>
                            <div class="item_title">
                                <h3><?php echo $section_1_item['title']; ?></h3>
                            </div>
                            <div class="item_icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                        </div>
                        <div class="item_content">
                            <div class="item_description">
                                <p><span class="item_highlight"><?php echo $section_1_item['paragraph_highlight']; ?></span>
                                <?php echo $section_1_item['paragraph']; ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php   
                } 
            } 
            ?> 
            <!-- <a href="#" class="w-10/12 md:w-[29%]">
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
                                    conferencia?</span> ¡Alquila nuestro salón de conferencias!
                                Nuestros salon es espacioso y esta equipado con todo lo que
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
            </a> -->
        </div>
    </div>
</div>