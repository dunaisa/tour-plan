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

ymaps.ready(init);
function init() {
  // Создание карты.
  var map = new ymaps.Map("map", {
    // Координаты центра карты.
    // Порядок по умолчанию: «широта, долгота».
    // Чтобы не определять координаты центра карты вручную,
    // воспользуйтесь инструментом Определение координат.
    center: [40.980109, 28.901357],
    // Уровень масштабирования. Допустимые значения:
    // от 0 (весь мир) до 19.
    zoom: 13,
    controls: ["zoomControl"],
    behaviors: ["drag"],
  });

  var placemark = new ymaps.Placemark([40.980109, 28.901357], {
    hintContent: "GRAND HILTON HOTEL",
  });

  map.geoObjects.add(placemark);
}

$(".newsletter").parallax({
  imageSrc: "img/newsletter-bg.jpg",
});
