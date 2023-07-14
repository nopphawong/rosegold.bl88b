const swalError = (buttonText = 'OK', title = '', text = '') => {
  Swal.fire({
    icon: 'error',
    title,
    text,
    confirmButtonText: buttonText,
  })
}

const swalWarnig = (buttonText = 'OK', title = '', text = '') => {
  Swal.fire({
    icon: 'warning',
    title,
    text,
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
