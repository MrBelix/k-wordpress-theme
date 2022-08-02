import Swiper from "swiper/bundle";
import {Autoplay} from "swiper";

class AcknowledgmentsSlider {
  constructor(selector) {
    this.selector = selector;
  }

  register() {
    new Swiper(this.selector, {
      slidesPerView: 1,
      centeredSlides: true,
      spaceBetween: 50,
      modules: [
        Autoplay
      ],
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
          slidesPerView: 3.5,
          navigation: {
            enabled: true
          }
        }
      }
    })
  }
}

export default AcknowledgmentsSlider;
