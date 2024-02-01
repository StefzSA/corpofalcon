<style>#servicios #section_1 .section-img{ background-image: url( <?php echo $template_fields['section_1_image']; ?>) }</style>
<div id="section_1">
    <div class="w-full min-h-[550px] relative">
        <div
            class="section-img absolute w-full h-full bg-[rgba(0,0,0,0.7)] bg-cover bg-center bg-blend-color">
        </div>
        <div class="absolute w-full h-full flex flex-wrap justify-center items-center">
            <div class="container mx-auto w-full">
                <div class="w-full pb-4">
                    <h2 class="w-full font-bold text-5xl md:text-6xl text-tertiary-500 text-center tracking-wide pb-6"><?php echo $template_fields['section_1_title'];?></h2>
                </div>
                <div class="w-full md:w-8/12 mx-auto">
                    <p class="w-full text-center text-xl md:text-2xl tracking-wide pb-6 text-white"><?php echo $template_fields['section_1_paragraph'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>