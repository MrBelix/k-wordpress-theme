import Swiper from 'swiper/bundle';

class ProjectSlider {
  constructor(selector) {
    this.selector = selector;
  }

  register() {

    this.modal = new Swiper('[data-trigger="modal-slider"] .swiper-modal', {
      loop: true
    })

    this.main = new Swiper(`${this.selector} .swiper-main`, {
      loop: true,
      on: {
        click: e => {
          const modal = document.querySelector('[data-trigger="modal-slider"]');
          modal.classList.add('open')
          document.body.classList.add('modal-oppened')
        }
      }
    })

    this.preview = new Swiper(`${this.selector} .swiper-preview`, {
      slidesPerView: 4,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 10,
      on: {
        slideChange: e => {
          this.main.slideTo(e.activeIndex - 3)
          this.modal.slideTo(e.activeIndex - 3)
        }
      }
    })

      this.main.on('slideChange', e =>  {
        this.preview.slideTo(e.activeIndex + 3)
      })
  }
}

export default ProjectSlider;
