class MobileNavigation {
  constructor(openSelector, closeSelector) {
    this.$root = document.body;
    this.$open = document.querySelector(openSelector);
    this.$close = document.querySelector(closeSelector)
  }

  register() {
    this.$open.addEventListener('click', () => {
      this.$root.classList.add('open-navigation')
    })

    this.$close.addEventListener('click', () => {
      this.$root.classList.remove('open-navigation')
    })
  }
}

export default MobileNavigation;
