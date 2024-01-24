<div id="section_2">
    <div class="container mx-auto w-full py-24">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex flex-wrap flex-col items-center pb-18">
                <div class="w-full pb-4">
                    <h2 class="w-full font-bold text-3xl md:text-4xl text-tertiary-500 text-center tracking-wide pb-6">
                        ¿Por qué elegirnos?</h2>
                </div>
                <div class="w-8/12">
                    <p class="w-full text-center text-xl md:text-2xltracking-wide pb-6">Cada cliente es único, y entendemos la importancia de adaptarnos a tus necesidades específicas. Nuestro compromiso es proporcionarte no solo un servicio, sino una experiencia personalizada que garantice tu completa satisfacción.</p>
                </div>
            </div>
            <div class="w-full flex flex-wrap justify-center mt-12">
                <?php
                $itemQty = array(1, 2, 3);

                foreach ($itemQty as $item) { ?>
                    <div class="w-1/5 p-4">
                        <div class="transition-all bg-white hover:shadow-lg min-h-[250px] flex flex-warp flex-col justify-center p-3 rounded">
                            <div class="w-full flex justify-center"><i class="text-secondary-500 text-8xl fa-solid fa-handshake"></i></div>
                            <div class="w-full text-dark_component-300 text-center mt-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="w-full flex justify-center mt-8">
                    <div class="cta"><a href="/nosotros">Aprende más</a></div>
                </div>
            </div>
        </div>
    </div>  