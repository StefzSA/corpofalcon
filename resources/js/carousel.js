//Made by StefGSA.
var $j = jQuery.noConflict();
// Inicia el carrusel
jQuery(document).ready(function () {
  const carousel = jQuery("#testimonials");
  startCarousel(carousel, 5000);
});

function startCarousel(carouselName, interval) {
  carouselName.ready(function () {
    jQuery(carouselName).find(".carousel-item:not(.active)").hide();
    assignData(carouselName);
    createDots(carouselName); //Crea los dos de control en el slider de manera dinámica
    startAutoplay(carouselName, interval); // Inicializa el autoplay
    autoplayController(carouselName, interval); // Inicia el controlador de autoplay
    dotsNavigation(carouselName, interval); //Inicializa el controlador de navegación por dots
  });
}

let autoplayInterval = null;

// Función para iniciar el autoplay
function startAutoplay(carouselName, interval) {
  let autoplayInitialized = false;
  if (!autoplayInterval || !autoplayInitialized) {
    autoplayInterval = setInterval(nextSlide, interval, carouselName);
    // Intervalo de ejecución de función
    autoplayInitialized = true;
  }
}
// Función para detener el carrusel automático
function stopAutoplay() {
  clearInterval(autoplayInterval);
}

function autoplayController(carouselName, interval) {
  // Controla el autoplay al pasar el mouse por encima del carrusel
  jQuery(carouselName).hover(
    function () {
      stopAutoplay();
    },
    function () {
      if (!carouselName.hasClass("paused")) {
        startAutoplay(carouselName, interval);
      }
    }
  );
}

function createDots(carouselName) {
  let items = jQuery(carouselName).find(".carousel-item").length;
  // Crea e inserta un dot por cada elemento
  for (let i = 0; i < items; i++) {
    jQuery(carouselName)
      .find(".dots")
      .append("<div class='dot' data-index='" + i + "'></div>");
  }
  jQuery(carouselName).find(".dot").first().addClass("active");
  jQuery(carouselName).find(".dot").first().attr("disabled", true);
}

function assignData(carouselName) {
  let i = 0;
  jQuery(".carousel").each(function () {
    let index = i++;
    jQuery(this).attr("data-carouselid", index);
  });
  jQuery(carouselName)
    .find(".carousel-item")
    .each(function () {
      let index = jQuery(this).index();
      jQuery(this).attr("data-slideid", index);
    });
}

function dotsNavigation(carouselName, interval) {
  // Controla la navegación por dots
  jQuery(carouselName).find("div.dot").click(function () {
      if (!jQuery(this).attr("disabled") == true) {
        stopAutoplay();
        let currentDot = jQuery(carouselName).find(".dot.active");
        let index = jQuery(this).data("index");
        let currentSlide = jQuery(carouselName).find(".carousel-item.active");
        let nextSlide = jQuery(carouselName).find(
          ".carousel-item[data-slideid='" + index + "']"
        );
        currentSlide.removeClass("active").fadeOut(function () {
          jQuery(nextSlide).addClass("active").fadeIn();
        });

        // Actualiza el dot de navegación activo
        currentDot.removeClass("active");
        currentDot.attr("disabled", false);
        jQuery(this).addClass("active");
        jQuery(this).attr("disabled", true);

        // Reinicia el intervalo con la nueva posición
        carouselName.addClass("paused");
        startAutoplay(carouselName, interval);
      }
    });
}

// Función para cambiar a la siguiente slide
function nextSlide(carouselName) {
  let carousel = jQuery(carouselName);
  let currentSlide = jQuery(carousel).find(".carousel-item.active");
  // console.log(currentSlide);
  currentSlide.removeClass("active").fadeOut(function () {
    let nextSlide = currentSlide.next(".carousel-item");
    if (nextSlide.length === 0) {
      nextSlide = jQuery(carousel).find(".carousel-item").first();
    }
    nextSlide.addClass("active").fadeIn();
  });

  // Actualiza los puntos de navegación
  let currentDot = jQuery(carousel).find(".dot.active");
  let nextDot = currentDot.next(".dot");
  if (nextDot.length === 0) {
    nextDot = jQuery(carousel).find(".dot").first();
  }
  currentDot.removeClass("active");
  currentDot.attr("disabled", false);
  nextDot.addClass("active");
  nextDot.attr("disabled", true);
}
