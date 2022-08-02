import "react"
import {Fragment, useEffect, useState} from "react";

const CloseBtn = ({onClick, className}) => {
  return (
    <svg className={className} onClick={onClick} width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_213_1366)">
        <circle cx="29.5" cy="29.5" r="9.5" fill="#FFC60A"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M46.8702 25.8995L44.0418 23.0711L36.9707 30.1421L29.8996 23.0711L27.0712 25.8995L34.1423 32.9706L27.0712 40.0416L29.8996 42.8701L36.9707 35.799L44.0418 42.8701L46.8702 40.0416L39.7991 32.9706L46.8702 25.8995Z" fill="white"/>
      <defs>
        <filter id="filter0_f_213_1366" x="0" y="0" width="59" height="59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_213_1366"/>
        </filter>
      </defs>
    </svg>
  )
}

const Modal = ({children, toggleClass}) => {
  const [isOpen, setIsOpen] = useState(false);

  useEffect(() => {
    const elems = document.querySelectorAll(`.${toggleClass}`)
    if (elems.length > 0) {
      elems.forEach(node => {
        node.addEventListener('click', openModal)
      })
    }
  })

  const closeModal = function () {
    setIsOpen(false)
  }

  const openModal = function () {
    setIsOpen(true)
  }

  return <Fragment>
    {isOpen &&
      <div className="modal">
        <div className="modal__navigation">
          <div>

          </div>
          <CloseBtn className="modal__close" onClick={ closeModal } />
        </div>
        <div className="modal__content">
          {children}
        </div>
      </div>}
  </Fragment>
}

export default Modal;
