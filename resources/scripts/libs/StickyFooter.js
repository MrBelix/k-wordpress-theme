class StickyFooter {
  constructor(selector, heroSectionSelector = '.hero-block') {
    this.$el = document.querySelector(selector)
    this.$heroSection = document.querySelector(heroSectionSelector);
    this.scrollPos = 0;
  }

  register() {
    if (!this.$heroSection) {
      this.$el.classList.add('show')
    } else {
      document.addEventListener('scroll', (event) => {
        const currentScrollPos = window.scrollY;

        if (currentScrollPos > this.$heroSection.offsetHeight && currentScrollPos < this.scrollPos) {
          this.$el.classList.add('show');
        } else {
          this.$el.classList.remove('show');
        }

        this.scrollPos = currentScrollPos;
      })
    }
  }
}

export default StickyFooter;
