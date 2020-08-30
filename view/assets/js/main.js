$(document).ready(function () {
  $(".login-form").submit(function (e) {
    e.preventDefault();
    if ($(this).parsley().isValid()) {
      let data = { email: $("#email").val(), password: $("#password").val() };

      $.post("../assets/ajax/verify_login.php", data, function (data, textStatus, jqXHR) {
          
      });
    } else {
      $(this).parsley();
    }
  });
});
