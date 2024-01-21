//carousel
$('.catalog-carousel').owlCarousel({
  loop: false,
  margin: 23,
  nav: true,
  dots: false,
  responsiveClass: true,
  navText: ['<i class="fas fa-chevron-left arrow-grey owl-prev-main"></i>', '<i class="fas fa-chevron-right arrow-grey owl-next-main"></i>'],
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});

$('.catalog-carousel-food').owlCarousel({
  loop: true,
  margin: 23,
  nav: true,
  dots: false,
  navText: ['<i class="fas fa-chevron-left arrow-grey owl-prev-main"></i>', '<i class="fas fa-chevron-right arrow-grey owl-next-main"></i>'],
  responsive: {
    0: {
      items: 1
    }
  }
});