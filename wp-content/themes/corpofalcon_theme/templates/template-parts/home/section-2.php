<div id="section_2">
    <div class="container mx-auto w-full py-24">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex flex-wrap flex-col items-center pb-18">
                <?php if (!empty($home_var['section_2_heading'])) { ?>
                    <div class="w-full pb-4">
                        <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-center tracking-wide pb-6">
                            <?php echo $home_var['section_2_heading']; ?></h2>
                    </div>
                <?php } ?>
                <?php if (!empty($home_var['section_2_paragraph'])) { ?>
                    <div class="w-8/12">
                        <p class="w-full text-center text-xl md:text-2xltracking-wide pb-6"><?php echo $home_var['section_2_paragraph']; ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="w-full flex flex-wrap justify-center mt-12">
                <?php
                if (!empty($home_var['section_2_item'])) {
                    foreach ($home_var['section_2_item'] as $section_2_item) {
                ?>
                        <div class="w-1/5 p-4">
                            <div class="transition-all bg-white hover:shadow-lg min-h-[250px] flex flex-warp flex-col justify-center p-3 rounded">
                                <div class="w-full flex justify-center"><i class="text-secondary-500 text-8xl fa-solid fa-handshake"></i></div>
                                <div class="w-full text-dark_component-300 text-center mt-6">
                                    <p><?php echo $section_2_item['paragraph']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <?php if (!empty($home_var['section_2_button_text'])) { ?>
                    <div class="w-full flex justify-center mt-8">
                        <div class="cta"><a href="<?php echo $home_var['section_2_button_link']; ?>"><?php echo $home_var['section_2_button_text']; ?></a></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>