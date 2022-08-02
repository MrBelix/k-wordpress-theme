import Swiper from 'swiper/bundle';

class ProjectSlider {
  constructor(selector) {
    this.selector = selector;
  }

  register() {
    this.main = new Swiper(`${this.selector} .swiper-main`, {
      loop: true,
      loopedSlides: 4,
    })

    this.preview = new Swiper(`${this.selector} .swiper-preview`, {
      slidesPerView: 4,
      spaceBetween: 10,
      loop: true,
      loopedSlides: 4,
      slideToClickedSlide: true,
    })

    this.main.controller.control = this.preview;
    this.preview.controller.control = this.main;
  }
}

export default ProjectSlider;
