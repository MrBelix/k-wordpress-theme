import Swiper from "swiper/bundle";

class VideoSlider {
  constructor(selector) {
    this.selector = selector;

  }

  register() {
    new Swiper(this.selector + ' .swiper', {
      centeredSlides: true,
      loop: true,
      slideToClickedSlide: true,
      breakpoints: {
        1024: {
          slidesPerView: 3,
        }
      }
    })

    document.querySelectorAll(this.selector + ' .swiper')
      .forEach(x => {
        x.addEventListener('click', (e) => {
          if (e.target && e.target.classList.contains('swiper-slide')) {
            this.modalOpen(e.target)
          }
        })
      })

    document.querySelectorAll(this.selector + '__item')
      .forEach(x => {
        x.addEventListener('click', e => {
          x.querySelector('.img').style.display = 'none'
          x.querySelector('.iframe').style.display = 'block';

          const player = new YT.Player(x.querySelector('.iframe'), {
            videoId: x.getAttribute('data-video-id'),
            events: {
              onReady: (event) => {
                event.target.playVideo();
              }
            }
          });
        })
      })

  }

  modalOpen(el) {
    if (this.modal) {
      this.modal.remove();
    }

    this.modal = document.createElement('div');
    this.modal.classList.add('modal', 'open', 'home-video-slider-block')
    this.modal.innerHTML = `<div class="modal__close">
    <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_521_4039)">
        <circle cx="29.5" cy="29.4992" r="9.5" fill="#FFC60A"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M46.8694 25.8987L44.0409 23.0702L36.9707 30.1405L29.9005 23.0702L27.072 25.8987L34.1423 32.9689L27.0704 40.0408L29.8988 42.8692L36.9707 35.7973L44.0426 42.8692L46.871 40.0408L39.7991 32.9689L46.8694 25.8987Z" fill="white"/>
      <defs>
        <filter id="filter0_f_521_4039" x="0" y="-0.000825882" width="59" height="59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_521_4039"/>
        </filter>
      </defs>
    </svg>
  </div>
  <div class="modal__content">
  <div class="iframe"></div>
  </div>`

    this.modal.querySelector('.modal__close').addEventListener('click', () => {
      this.modal.remove();
    })


    const player = new YT.Player(this.modal.querySelector('.iframe'), {
      videoId: el.getAttribute('data-video-id'),
      events: {
        onReady: (event) => {
          event.target.playVideo();
        }
      }
    });


    document.body.append(this.modal);
  }
}

export default VideoSlider;
