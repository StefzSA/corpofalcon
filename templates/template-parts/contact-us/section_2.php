<div id="section_2" class="cartas container mx-auto py-20 ">
    <div class="w-full h-full flex justify-center items-center flex-wrap">
        <?php
        $iqty = array(1, 2, 3);
        foreach ($iqty as $qty) { ?>
            <div class="w-full md:w-1/3 p-4">
                <div class="icon min-h-[40px] pb-5 flex justify-center items-center"><i
                        class="text-secondary-500 text-8xl fa fa-credit-card" aria-hidden="true"></i></div>
                <div class="title text-center pb-5">
                    <h2>Emprendimiento</h2>
                </div>
                <div class="description !text-center text-dark_component-300 w-full flex flex-wrap justify-center">
                    <p class="p-2">Departamento de Emprendimiento</p>
                    <a href="tel:+58412-122-312" class="p-2">Tel: 0412-435-23-42</a>
                    <p>Correo: emprende@connosotros.com</p>
                </div>
                <button
                    class="open_modal flex w-[60%] justify-center mt-9 text-white py-[10px] bg-secondary-500 rounded-md mx-auto" data-dep="1">Obtener
                    informacion</button>
            </div>
        <?php } ?>
    </div>
</div>