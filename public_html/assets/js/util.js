const copyClipboard = (id) => {
  const copyText = $(id)
  navigator.clipboard.writeText(copyText.html())
  toastr.info('Copied to clipboard', '', { timeOut: 500 })
}
