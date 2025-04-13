var isTablet = window.innerWidth >= 768;

var swiper = new Swiper(".swiper", {
  slidesPerView: 'auto', // 自動的にスライドの幅を決定
  spaceBetween: 32,
  grabCursor: true,
  loop: true,
  centeredSlides:  isTablet ? false : true,
  mousewheel: {
    enabled: true,
    sensitivity: 5,
    forceToAxis: true,
    passive: true,
  },
  autoplay: {
      delay: 3000,
  },
});

window.addEventListener('resize', function() {
  var updatedCenteredSlides = window.innerWidth >= 768 ? false : true;
  swiper.params.centeredSlides = updatedCenteredSlides; // centeredSlidesの値を更新
  swiper.update(); // スワイパーを更新
});

var swiper = new Swiper(".swiper-gallary", {
  slidesPerView: 'auto',
  grabCursor: true,
  spaceBetween: 0, 
  loop: true,
  mousewheel: {
    enabled: true,
    sensitivity: 5,
    forceToAxis: true,
  },
  autoplay: {
      delay: 3000,
  },
});