const myCarouselElement = document.querySelector("#headerCarousel");

const carousel = new bootstrap.Carousel(myCarouselElement);

var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

function scrollToSection(sectionId) {
  var section = document.getElementById(sectionId);
  if (section) {
    var offset = section.offsetTop - 140; // 20px de margen superior
    window.scrollTo({ top: offset, behavior: "smooth" }); // Desplazamiento suave
  }
}
