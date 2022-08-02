class StickyFooter {
  constructor(selector, heroSectionSelector = '.hero-block') {
    this.$el = document.querySelector(selector)
    this.$heroSection = document.querySelector(heroSectionSelector);
  }

  register() {
    if (!this.$heroSection) {
      this.$el.classList.add('show')
    } else {
      document.addEventListener('scroll', (event) => {
        const currentScrollPos = window.scrollY;

        if (currentScrollPos > this.$heroSection.offsetHeight) {
          this.$el.classList.add('show');
        } else {
          this.$el.classList.remove('show');
        }
      })
    }
  }
}

export default StickyFooter;
