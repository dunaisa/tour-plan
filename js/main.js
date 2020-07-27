var hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,
  keyboard: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
  effect: "coverflow",
  speed: 900,
});

$(".newsletter").parallax({
  imageSrc: "img/newsletter-bg.jpg",
});

var reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,
  keyboard: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});
