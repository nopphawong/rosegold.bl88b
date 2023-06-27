const swalError = (buttonText = 'OK', title = '') => {
  Swal.fire({
    icon: 'error',
    title,
    confirmButtonText: buttonText,
  })
}

const swalFlashAlert = (title = '', icon = 'success', timer = 1500) => {
  Swal.fire({
    icon,
    title,
    showConfirmButton: false,
    timer,
  })
}

const swalConfirm = (title = '', icon = 'question') => {
  Swal.fire({
    icon,
    title,
    showConfirmButton: showButton,
    showCancelButton: true,
  })
}
