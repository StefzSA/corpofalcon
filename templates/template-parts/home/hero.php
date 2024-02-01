<?php
?>
<div class="overlay light"></div>
<div id="hero-section" class="flex flex-wrap">
    <div class="columns container w-full mx-auto relative z-auto h-full">
        <div class="flex flex-wrap w-full h-full items-center">
            <div class="left w-full md:w-8/12 gap-4">
                <?php if(!empty($template_fields['hero_title'])) { ?>
                    <div class="title w-full">
                        <h1><?php echo $template_fields['hero_title']; ?></h1>
                    </div>
                <?php } ?>
                <?php if(!empty($template_fields['hero_description'])) { ?>
                    <div class="description w-full">
                        <p><?php echo $template_fields['hero_description']; ?></p>
                    </div>
                <?php } ?>
                <?php if(!empty($template_fields['hero_button_text'])) { ?>
                    <div class="cta dark-text w-full">
                        <a href="<?php $template_fields['hero_button_link']; ?>"><?php echo $template_fields['hero_button_text']; ?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="right hidden md:block w-full md:w-4/12">
                <?php if(!empty($template_fields['hero_image'])) { ?>
                    <div class="hero_img">
                        <img src="<?php echo $template_fields['hero_image']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php 
    include_once(PARTS_DIR .'/home/hero-transition.php'); 
    ?>
</div>