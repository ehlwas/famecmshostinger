import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

new Swiper('#testimonialSwiper', {
    direction: 'horizontal', // Change to 'horizontal' if needed
    loop: true,
    initialSlide: 1,
    slidesPerView: 3,
    autoHeight: true,
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 50,

    navigation: {
        nextEl: '#testimonialNext',
        prevEl: '#testimonialPrev',
    },
});

new Swiper('#recentEventsSwiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        800: {
            slidesPerView: 2,
        },
        1270: {
            slidesPerView: 3,
        },
    },
})

new Swiper('#imageSlides', {
    direction: 'horizontal', // Change to 'horizontal' if needed
    slidesPerView: 'auto',
    autoHeight: true,
    spaceBetween: 30,
    allowTouchMove: true,
    freeMode: true,
})

let swiperInstance = null;

function initSwiperIfNeeded() {
  if (window.innerWidth >= 1400) {
    if (!swiperInstance) {
      swiperInstance = new Swiper('.marquee-swiper', {
        slidesPerView: 'auto',
        loop: true,
        // allowTouchMove: false,
        speed: 10000, // 10s for full loop
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
      });
    }
  } else {
    if (swiperInstance) {
      swiperInstance.destroy(true, true);
      swiperInstance = null;
    }
  }
}

window.addEventListener('load', initSwiperIfNeeded);
window.addEventListener('resize', initSwiperIfNeeded);