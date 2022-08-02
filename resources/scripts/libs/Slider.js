import Swiper from 'swiper/bundle';
import {Autoplay} from "swiper";


class Slider {
  constructor(selector) {
    this.selector = selector;
    this.options = {
      modules: [
        Autoplay
      ],
      centeredSlides: true,
      slidesPerView: 1,
      spaceBetween: 0,
      autoHeight: true,
      loop: true,
      autoplay: {
        delay: 2000,
      },
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 2.5,
          navigation: {
            enabled: false
          }
        }
      }
    }
  }

  register() {
    new Swiper(this.selector, this.options)
  }
}

export default Slider
