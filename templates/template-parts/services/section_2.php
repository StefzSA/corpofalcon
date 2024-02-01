<div id="section_2" class="bg-white pb-12">
    <?php
    if (!empty($template_fields['services'])) {
        $i = 0;
        foreach ($template_fields['services'] as $service) {
            $i++;
            if ($i % 2 == 0) {
                ?>
                <div class="w-full min-h-[550px] relative">
                    <div class="container w-full h-full flex flex-wrap items-center pb-12">
                        <div class="w-full">
                            <div class="w-full pb-4">
                                <h2
                                    class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-center md:text-left tracking-wide pb-6">
                                    <?php echo $service['title']; ?>
                                </h2>
                            </div>
                            <div class="w-full">
                                <p class="w-full text-center md:text-left text-xl md:text-2xl tracking-wide pb-6">
                                    <?php echo $service['paragraph']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container w-full h-full flex flex-wrap items-center pb-12">
                        <div class="w-full flex flex-wrap items-center justify-center gap-4">
                            <?php
                            $k = 0;
                            foreach ($service['items'] as $item) {
                                $k++;
                                ?>
                                <div class="w-full md:w-[29%] p-6 flex flex-col justify-center items-center gap-4">
                                    <div class="pb-4 min-h-[90px] flex items-center"><i
                                            class="text-8xl md:text-7xl aspect-square <?php echo ($k % 2 == 0) ? 'text-tertiary-500 ' : 'text-secondary-500 '; ?><?php echo $item['item_icon']; ?>"></i>
                                    </div>
                                    <div class="pb-4 min-h-[30px] pt-2">
                                        <h3 class="text-center pb-2 text-lg">
                                            <?php echo $item['item_title']; ?>
                                        </h3>
                                    </div>
                                    <div class="pb-4 min-h-[70px] md:min-h-[150px]">
                                        <p class="text-center text-dark_component-400">
                                            <?php echo $item['item_paragraph']; ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <div>
                                <button class="cta"><a href="#">Ver más</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="w-full min-h-[550px] relative <?php echo ($i == 1) ? 'pt-24 pb-12' : 'py-12'; ?>">
                    <div class="container w-full h-full flex flex-wrap items-center pb-12">
                        <div class="w-full">
                            <div class="w-full pb-4">
                                <h2
                                    class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-center md:text-right tracking-wide pb-6">
                                    <?php echo $service['title']; ?>
                                </h2>
                            </div>
                            <div class="w-full">
                                <p class="w-full text-center md:text-right text-xl md:text-2xl tracking-wide pb-6">
                                    <?php echo $service['paragraph']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container w-full h-full flex flex-wrap items-center pb-12">
                        <div class="w-full flex flex-wrap items-center justify-center gap-4">
                            <?php
                            $k = 0;
                            foreach ($service['items'] as $item) {
                                $k++;
                                ?>
                                <div class="w-full md:w-[29%] p-6 flex flex-col justify-center items-center">
                                    <div class="pb-4 min-h-[90px] flex items-center"><i
                                            class="text-8xl md:text-7xl aspect-square <?php echo ($k % 2 == 0) ? 'text-tertiary-500 ' : 'text-secondary-500 '; ?><?php echo $item['item_icon']; ?>"></i>
                                    </div>
                                    <div class="pb-4 min-h-[30px] pt-2">
                                        <h3 class="text-center pb-2 text-lg">
                                            <?php echo $item['item_title']; ?>
                                        </h3>
                                    </div>
                                    <div class="pb-4 min-h-[70px] md:min-h-[150px]">
                                        <p class="text-center text-dark_component-400">
                                            <?php echo $item['item_paragraph']; ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <div>
                                <button class="cta"><a href="#">Ver más</a></button>
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