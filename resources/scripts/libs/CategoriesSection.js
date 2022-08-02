import Swiper from 'swiper/bundle';
import {Autoplay} from "swiper";

class CategoriesSection {
  constructor(selector) {
    this.selector = selector;
    this.$el = document.querySelector(this.selector)
    this.$desktopItems = this.$el? this.$el.querySelectorAll(`${this.selector}__desktop-item`) : null;
    this.$desktopActiveBackground = null;
    this.$desktopActiveItem = null
  }

  register() {
    if (!this.$el) return;

    this.$desktopItems.forEach(x => x.addEventListener('mouseover', x => this.onDesktopHover(x.target)))
    this.onDesktopHover(this.$desktopItems[0])

    new Swiper(`${this.selector}__mobile .swiper`, {
      modules: [
        Autoplay
      ],
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      calculateHeight:true,
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

  onDesktopHover(target) {
    if(this.$desktopActiveItem) {
      [this.$desktopActiveItem, this.$desktopActiveBackground].forEach(x => x.classList.remove('active'));
    }

    this.$desktopActiveItem = target;

    const dataTarget = this.$desktopActiveItem.getAttribute('data-target');

    this.$desktopActiveBackground = this.$el.querySelector(`${this.selector}__desktop-background[data-for="${dataTarget}"]`);

    [this.$desktopActiveItem, this.$desktopActiveBackground].forEach(x => x.classList.add('active'))
  }
}

export default CategoriesSection;
