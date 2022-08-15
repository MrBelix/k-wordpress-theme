import Swiper from "swiper/bundle";
import {Autoplay} from "swiper";

class ImageSlider {
  constructor(selector) {
    this.selector = selector;

  }

  register() {
    new Swiper(this.selector, {
      centeredSlides: this,
      loop: true,
      modules: [
        Autoplay
      ],
      slidesPerView: 1,
      autoplay: {
        delay: 2000,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3
        }
      }
    })
  }

}

export default ImageSlider
