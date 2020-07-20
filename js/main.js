var mySwiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,
  keyboard: true,

  // Navigation arrows
  navigation: {
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
  },
  effect: "coverflow",
  speed: 900,
});
