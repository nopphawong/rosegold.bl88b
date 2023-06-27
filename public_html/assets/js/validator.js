$(function () {
  $.validator.setDefaults({
    errorClass: 'help-block',
  })

  $.validator.addMethod(
    'alpha_numeric',
    function (value, element) {
      return this.optional(element) || /^[\w.]+$/i.test(value)
    },
    'Letters, numbers, and underscores only please'
  )
})
