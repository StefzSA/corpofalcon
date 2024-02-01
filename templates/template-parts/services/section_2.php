<div id="section_2" class="bg-white pb-12">
    <?php
    if (!empty($template_fields['services'])) {
        $i = 0;
        foreach ($template_fields['services'] as $service) {
            $i++;
            if ($i % 2 == 0) {
                ?>
                <div class="w-full min-h-[550px] relative">
                    <div class="absolute w-full h-full bg-cover bg-center bg-blend-color">
                    </div>
                    <div class="container w-full h-full flex flex-wrap items-center">
                        <div class="mx-auto w-full">
                            <div class="w-full pb-4">
                                <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-left tracking-wide pb-6">
                                    <?php echo $service['title']; ?>
                                </h2>
                            </div>
                            <div class="w-full">
                                <p class="w-full text-left text-xl md:text-2xl tracking-wide pb-6">
                                    <?php echo $service['paragraph']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                ?>
                <div class="w-full min-h-[550px] relative <?php echo ($i==1)? 'pt-24 pb-12':'py-12';?>">
                    <div class="absolute w-full h-full bg-cover bg-center bg-blend-color">
                    </div>
                    <div class="container w-full h-full flex flex-wrap items-center">
                        <div class="mx-auto w-full">
                            <div class="w-full pb-4">
                                <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-right tracking-wide pb-6">
                                    <?php echo $service['title']; ?>
                                </h2>
                            </div>
                            <div class="w-full">
                                <p class="w-full text-right text-xl md:text-2xl tracking-wide pb-6">
                                    <?php echo $service['paragraph']; ?>
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