$(document).ready(function () {
  $(".login-form").submit(function (e) {
    e.preventDefault();
    $(this).parsley()
    if ($(this).parsley().isValid()) {
        
    } else {
      $(this).parsley().validate();
    }
  });
});
