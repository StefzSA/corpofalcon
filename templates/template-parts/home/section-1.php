<?php
$i = 0;
if (!empty($template_fields['section_1_item'])) {
    echo '<style>
    #section_1 {';
    foreach ($template_fields['section_1_item'] as $section_1_item) {
        $i++;
        echo ' .item_img_' . $i . ' {  background-image: url(' . $section_1_item['background_image'] . ');}'; 
    }
    echo '} </style>';
} 
?>

<div id="section_1">
    <div class="section_wrap container mx-auto w-full p-4">
        <div class="section_content flex flex-wrap">
            <?php if (!empty($template_fields['section_1_heading'])) { ?>
                <div class="w-full">
                    <h2 class="w-full font-bold text-3xl md:text-4xl text-secondary-500 text-center tracking-wide pb-16">
                        <?php echo $template_fields['section_1_heading']; ?>
                    </h2>
                    <span class="block md:hidden mt-3 text-xl text-center text-tertiary-500 my-5">¡Toca para saber
                        más!</span>
                </div>
            <?php } ?>
            <?php
            $i = 0;
            if (!empty($template_fields['section_1_item'])) {
                foreach ($template_fields['section_1_item'] as $section_1_item) {
                    $i++; ?>
                    <a href="<?php echo $section_1_item['link']; ?>" class="w-10/12 md:w-[29%]">
                        <div class="item_wrap w-full">
                            <div class="item_img_<?php echo $i; ?>">
                                <div class="overlay"></div>
                                <div class="item_title text-center text-2xl md:text-3xl text-tertiary-500">
                                    <h3>
                                        <?php echo $section_1_item['title']; ?>
                                    </h3>
                                </div>
                                <div class="item_icon">
                                    <i class="<?php echo $section_1_item['icon']; ?>"></i>
                                </div>
                            </div>
                            <div class="item_content translate-y-6">
                                <div class="item_description">
                                    <p><span class="item_highlight">
                                            <?php echo $section_1_item['paragraph_highlight']; ?>
                                        </span>
                                        <?php echo $section_1_item['paragraph']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            } ?>
        </div>
    </div>
</div>