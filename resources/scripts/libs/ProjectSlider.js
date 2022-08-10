import Swiper from 'swiper/bundle';

class ProjectSlider {
  constructor(selector) {
    this.selector = selector;
  }

  register() {

    this.modal = new Swiper('[data-trigger="modal-slider"] .swiper-modal', {
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })

    this.main = new Swiper(`${this.selector} .swiper-main`, {
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        click: e => {
          const modal = document.querySelector('[data-trigger="modal-slider"]');
          modal.classList.add('open')
          document.body.classList.add('modal-oppened')
        },
        slideChange: e => {
          this.modal.slideTo(e.activeIndex)
        }
      }
    })
  }
}

export default ProjectSlider;
