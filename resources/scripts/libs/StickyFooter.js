class StickyFooter {
  constructor(selector, heroSectionSelector = '.hero-block') {
    this.$el = document.querySelector(selector)
    this.$heroSection = document.querySelector(heroSectionSelector);
    this.scrollPos = 0;
  }

  register() {
    document.addEventListener('scroll', (event) => {
      const currentScrollPos = window.scrollY;
      if ((this.$heroSection && currentScrollPos < this.$heroSection.offsetHeight) || currentScrollPos > this.scrollPos) {
        this.$el.classList.remove('show');
      } else {
        this.$el.classList.add('show');
      }

      this.scrollPos = currentScrollPos;
    });
  }
}

export default StickyFooter;
