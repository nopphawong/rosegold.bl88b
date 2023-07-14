const copyClipboard = (id) => {
  const copyText = $(id)
  navigator.clipboard.writeText(copyText.html())
  toastr.info('Copied to clipboard', '', { timeOut: 500 })
}

const numberWithCommas = (number) => {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }