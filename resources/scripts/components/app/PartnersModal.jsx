import 'react'

import Modal from "@scripts/components/core/Modal";

const partnersModal = ({toggler, children}) => {
  return (
    <Modal toggleClass={toggler}>
      {children}
    </Modal>
  )
}

export default partnersModal;
