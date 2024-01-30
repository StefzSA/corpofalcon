<?php
/*
 * Template Name: contactus
 */

get_header();
?>
<main>
    <div class="img w-full min-h-[250px] md:min-h-[330px] relative">
        <div class="absolute w-full h-full bg-[rgba(0,0,0,0.7)] bg-[url('http://localhost/corpofalcon/wp-content/uploads/2023/12/medanos.jpg')] bg-cover bg-center bg-blend-color"></div>
        <div class="absolute w-full h-full flex justify-center items-center flex-wrap">
            <div class="container mx-auto">
                <div class="w-full">
                    <h1 class="w-full font-bold text-5xl md:text-6xl text-tertiary-500 text-center tracking-wide pb-6">Contactanos.</h1>
                </div>
                <div class="w-full">
                    <p class="w-full text-center text-xl md:text-2xl tracking-wide pb-6 text-white">Somos tu mejor opcion.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="cartas container mx-auto py-20 ">
        <div class="w-full h-full flex justify-center items-center flex-wrap">
            <?php
            $iqty = array(1, 2, 3);
            foreach ($iqty as $qty) { ?>
                <div class="w-full md:w-1/3 p-4">
                    <div class="icon min-h-[40px] pb-5 flex justify-center items-center"><i class="text-secondary-500 text-8xl fa fa-credit-card" aria-hidden="true"></i></div>
                    <div class="title text-center pb-5">
                        <h2>Emprendimiento</h2>
                    </div>
                    <div class="description !text-center text-dark_component-300 w-full flex flex-wrap justify-center">
                        <p class="p-2">Departamento de Emprendimiento</p>
                        <a href="tel:+58412-122-312" class="p-2">Tel: 0412-435-23-42</a>
                        <p>Correo: emprende@connosotros.com</p>
                    </div>
                    <button class="open_modal flex w-[60%] justify-center mt-9 text-white py-[10px] bg-secondary-500 rounded-md mx-auto" data-type="1">Obtener informacion</button>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="py-10 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.0438206853555!2d-69.66919666958597!3d11.404363524589064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e842b5223a46d51%3A0x100a5bd73f56ba2d!2sCentro%20Comercial%20Shopping%20Center!5e0!3m2!1ses-419!2sve!4v1706201578162!5m2!1ses-419!2sve" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>

<div id="openModal" class="modalDialog">
        <div id="modalWindow">
            <button id="close_modal" class="close">X</button>
            <div id="form_section" class="w-full flex justify-center mt-8">
            </div>
        </div>
    </div>
<?php
get_footer();
?>