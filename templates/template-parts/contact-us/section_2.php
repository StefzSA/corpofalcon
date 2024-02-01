<div id="section_2" class="cartas container mx-auto py-20 ">
    <div class="w-full h-full flex justify-center items-center flex-wrap">
        <?php
        foreach ($template_fields['section_2_cards'] as $card) { ?>
            <div class="w-full md:w-1/3 flex justify-center flex-wrap py-16 md:py-0">
                <div class="w-full min-h-[120px] flex justify-center items-center"><i
                        class="text-secondary-500 text-8xl <?php echo $card['card_icon'];?>" aria-hidden="true"></i></div>
                <div class="text-center min-h-[120px] flex flex-wrap justify-center">
                    <div class="w-full p-2 min-h-[70px] md:w-10/12"><h2 class="text-2xl"><?php echo $card['card_title'];?></h2></div>
                    <div class="w-full min-h-[50px]"><p class="wp-2 text-dark_component-300"><?php echo $card['card_subtitle'];?></p></div>
                </div>
                <div class="!text-center text-dark_component-300 w-full flex flex-wrap justify-center pt-4 pb-2">
                    <div class="w-full"><span class="text-tertiary-500 text-xl">Llámanos</span></div>
                    <div class="w-full pt-2"><a href="tel:<?php echo $card['card_phone'];?>">Tel: <?php echo $card['card_phone'];?></a></div>
                </div>
                <div class="w-full flex justify-center"><span class="text-tertiary-500 text-xl py-2">O</span></div>
                <button
                    class="open_modal flex px-4 justify-center text-white py-[10px] bg-secondary-500 rounded-md" data-dep="<?php echo $card['card_id'];?>">¡Escríbenos!</button>
            </div>
        <?php } ?>
    </div>
</div>