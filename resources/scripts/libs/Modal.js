class Modal {
  constructor(selector, triggerAttr) {
    this.$modals = document.querySelectorAll(selector)
    this.triggerAttr = triggerAttr;
  }

  register() {
    this.$modals.forEach(x => {
      const trigger = x.getAttribute(this.triggerAttr);
      if (trigger) {
        this.registerModal(x, trigger)
      }
    })
  }

  registerModal(modal, trigger)
  {
    document.querySelectorAll(`a[href="#${trigger}"]`)
      .forEach(x => {
        x.addEventListener('click', (e) => {
          e.preventDefault();
          modal.classList.add('open')
        })
      })

    modal.querySelector('.modal__close').addEventListener('click', () => modal.classList.remove('open'))
  }
}

export default Modal;
