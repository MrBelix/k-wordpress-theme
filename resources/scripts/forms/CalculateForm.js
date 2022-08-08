class Form {
  constructor(selector, required) {
    this.$form = document.querySelector(selector)
    this.required = required;
  }

  register() {
    this.$form.querySelector('.input-group.file').addEventListener('change', e => {
      const parent = e.target.closest('.input-group');
      const nameSpan = parent.querySelector('.filename');

      if (e.target.files[0]) {
        parent.classList.add('selected')
        nameSpan.innerText = e.target.files[0].name;
      } else {
        parent.classList.remove('selected')
        nameSpan.innerText = '';
      }
    })
    this.$form.addEventListener('submit', e => {
      e.preventDefault();
      const elems = this.$form.querySelectorAll('input:not([name="search_terms"]), select')

      if (this.validate(elems)) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", this.$form.getAttribute('action'), true)
        xhr.onload = e => {
          this.$form.closest('.modal').classList.add('sent')
        }
        xhr.send(new FormData(this.$form))
      }


    })
  }

  validate(elems) {
    let isValid = true;

    elems.forEach(elem => {
      if (this.required.includes(elem.name)) {
        const parent = elem.closest('.input-group');

        if (!elem.value) {
          parent.classList.add('invalid');
          isValid = false;
        } else {
          parent.classList.remove('invalid')
        }
      }
    })

    return isValid;
  }
}

export default Form;
