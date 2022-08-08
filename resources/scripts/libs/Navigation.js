class Navigation {
  constructor(selector) {
    this.$el = document.querySelector(selector)
    this.scrollPos = 0;
  }
  register() {
    document.addEventListener('scroll', () => {
      this.onScroll()
    })
  }

  onScroll() {
    const pos = window.scrollY;

    if (pos > this.scrollPos) {
      this.$el.classList.add('hide')
    } else {
      this.$el.classList.remove('hide')
    }

    this.scrollPos = pos;
  }
}

export default Navigation;
