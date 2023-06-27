const spinner = (action = 'show' | 'hide') => {
  if (action === 'hide') {
    $('#loader-area').css('display', 'none')
  } else {
    $('#loader-area').css('display', 'block')
  }
}
