$(document).ready(function () {
  $(".login-form").submit(function (e) {
    e.preventDefault();
    if ($(this).parsley().isValid()) {
      let data = { email: $("#email").val(), password: $("#password").val() };

      $.post("../assets/ajax/verify_login.php", data, function (
        data,
        textStatus,
        jqXHR
      ) {
        let response = JSON.parse(data);
        if (response.responseCode !== 0) {
          $(".login-msg").html(`<strong>${response.responseMessage}</strong>`);
          $(".login-msg").show();
        } else {
          $(".login-msg").html(`<strong>${response.responseMessage}</strong>`);
          $(".login-msg").show();
        }
      });
    } else {
      $(this).parsley();
    }
  });
});
