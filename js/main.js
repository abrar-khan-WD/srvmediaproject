// Owl Carousel JS
$(document).ready(function () {
  $(".mainSectionCarousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<img src="images/design/main/arrowLeft.png" alt="Previous">',
        '<img src="images/design/main/arrowRight.png" alt="Next">'
    ],
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 6,
      },
    },
  });
});