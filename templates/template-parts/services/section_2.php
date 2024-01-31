<div id="section_2">
    <?php
    if (!empty($template_fields['services'])) {
        $i = 0;
        foreach ($template_fields['services'] as $service) {
            $i++;
            if ($i % 2 == 0) {
                ?>
                <div class="w-full min-h-[550px] relative">
                    <div class="banner absolute w-full h-full bg-[rgba(0,0,0,0.7)] bg-cover bg-center bg-blend-color">
                    </div>
                    <div class="container absolute w-full h-full flex flex-wrap items-center">
                        <div class="mx-auto w-full">
                            <div class="w-full pb-4">
                                <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-left tracking-wide pb-6">
                                    <?php echo $template_fields['section_2_title']; ?>
                                </h2>
                            </div>
                            <div class="w-8/12 mx-auto">
                                <p class="w-full text-left text-xl md:text-2xl tracking-wide pb-6 text-white">
                                    <?php echo $template_fields['section_2_paragraph']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="w-full min-h-[550px] relative">
                    <div class="banner absolute w-full h-full bg-[rgba(0,0,0,0.7)] bg-cover bg-center bg-blend-color">
                    </div>
                    <div class="container absolute w-full h-full flex flex-wrap items-center">
                        <div class="mx-auto w-full">
                            <div class="w-full pb-4">
                                <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-right tracking-wide pb-6">
                                    <?php echo $template_fields['section_2_title']; ?>
                                </h2>
                            </div>
                            <div class="w-8/12 mx-auto">
                                <p class="w-full text-right text-xl md:text-2xl tracking-wide pb-6 text-white">
                                    <?php echo $template_fields['section_2_paragraph']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }
    ?>
</div>