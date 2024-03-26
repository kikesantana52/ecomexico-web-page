const myCarouselElement = document.querySelector("#headerCarousel");

const carousel = new bootstrap.Carousel(myCarouselElement);

var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

$(document).ready(function () {
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    $(".parallax-container").css(
      "background-position",
      "center " + -(scrollTop * 0.9) + "px"
    );
    // Ajusta el factor multiplicador según la velocidad que desees para el efecto parallax
  });
});
