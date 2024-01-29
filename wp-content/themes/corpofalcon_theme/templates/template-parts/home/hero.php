<?php
?>
<div class="overlay light"></div>
<div id="hero-section">
    <div id="hero-bg" class="img-bg"></div>
    <div class="columns container w-full mx-auto relative z-auto h-full">
        <div class="flex flex-wrap w-full h-full items-center">
            <div class="left w-full md:w-8/12">
                <?php if(!empty($home_var['hero_title'])) { ?>
                    <div class="title w-full text-6xl md:text-8xl">
                        <h1><?php echo $home_var['hero_title']; ?></h1>
                    </div>
                <?php } ?>
                <?php if(!empty($home_var['hero_description'])) { ?>
                    <div class="description w-full">
                        <p><?php echo $home_var['hero_description']; ?></p>
                    </div>
                <?php } ?>
                <?php if(!empty($home_var['hero_button_text'])) { ?>
                    <div class="cta dark-text w-full">
                        <a href="<?php $home_var['hero_button_link']; ?>"><?php echo $home_var['hero_button_text']; ?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="right hidden md:block w-full md:w-4/12">
                <?php if(!empty($home_var['hero_image'])) { ?>
                    <div class="hero_img">
                        <img src="<?php echo $home_var['hero_image']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>