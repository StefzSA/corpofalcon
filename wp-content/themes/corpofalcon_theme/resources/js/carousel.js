//Made by StefGSA.

// Inicia el carrusel
$(document).ready(function () {
  startCarousel();
});

function startCarousel() {
  $(".carousel-item:not(.active)").css("display", "none");
  createDots(); //Crea los dos de control en el slider de manera dinámica
  startAutoplay(); // Inicializa el autoplay
  autoplayController(); // Inicia el controlador de autoplay
  dotsNavigation(); //Inicializa el controlador de navegación por dots
}

// Función para iniciar el autoplay
function startAutoplay() {
  let autoplayInitialized = false;
  if (!autoplayInitialized) {
    autoplayInterval = setInterval(nextSlide, 4000); // Cambia la diapositiva cada 3 segundos
    autoplayInitialized = true;
  }
}

// Función para detener el carrusel automático
function stopAutoplay() {
  clearInterval(autoplayInterval);
}

function autoplayController() {
  // Controla el autoplay al pasar el mouse por encima del carrusel
  $(".carousel-items").hover(
    function () {
      stopAutoplay();
    },
    function () {
      startAutoplay();
    }
  );
  $(".controls").hover(
    function () {
      stopAutoplay();
    },
    function () {
      startAutoplay();
    }
  );
}

function createDots() {
  let items = $(".carousel-item").length;
  // Crea e inserta un dot por cada elemento
  for (let i = 0; i < items; i++) {
    $(".dots").append("<div class='dot' data-index='" + i + "'></div>");
  }
  // Activa el primer dot
  $(".dot").first().addClass("active");
}

function dotsNavigation() {
  // Controla la navegación por puntos
  $("div.dot").click(function () {
    stopAutoplay();
    let currentDot = $(".dot.active");
    let index = $(this).data("index");
    let currentSlide = $(".carousel-item.active");
    let nextSlide = $(".carousel-item[data-carid='" + index + "']");
    currentSlide.removeClass("active").fadeOut(function () {
      $(nextSlide).addClass("active").fadeIn();
    });

    // Actualiza el dot de navegación activo
    currentDot.removeClass("active");
    $(this).addClass("active");
  });
}

// Función para cambiar a la siguiente diapositiva
function nextSlide() {
  let currentSlide = $(".carousel-item.active");
  currentSlide.removeClass("active").fadeOut(function () {
    let nextSlide = currentSlide.next(".carousel-item");
    if (nextSlide.length === 0) {
      nextSlide = $(".carousel-item").first();
    }
    nextSlide.addClass("active").fadeIn();
  });

  // Actualiza los puntos de navegación
  let currentDot = $(".dot.active");
  let nextDot = currentDot.next(".dot");
  if (nextDot.length === 0) {
    nextDot = $(".dot").first();
  }
  currentDot.removeClass("active");
  nextDot.addClass("active");
}
