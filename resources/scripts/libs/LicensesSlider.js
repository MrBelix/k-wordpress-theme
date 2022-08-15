import Swiper from "swiper/bundle";
import {Autoplay} from "swiper";

class LicensesSlider {
  constructor(selector) {
    this.selector = selector;
  }

  register() {
    new Swiper(this.selector, {
      modules: [
        Autoplay
      ],
      slidesPerView: 1,
      autoplay: {
        delay: 2000,
      },
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })
  }
}

export default LicensesSlider;
