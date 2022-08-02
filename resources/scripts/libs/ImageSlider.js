import Swiper from "swiper/bundle";

class ImageSlider {
  constructor(selector) {
    this.selector = selector;

  }

  register() {
    new Swiper(this.selector, {
      slidesPerView: 1,
      centeredSlides: this,
      loop: true,
      breakpoints: {
        1024: {
          slidesPerView: 3
        }
      }
    })
  }

}

export default ImageSlider
