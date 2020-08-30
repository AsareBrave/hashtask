$(document).ready(function () {
  $(".login-form").submit(function (e) {
    e.preventDefault();
    if ($(this).parsley().isValid()) {
      let data = { email: $("#email").val(), password: $("#password").val() };

      $.post("../assets/ajax/verify_login.php", data, function (data) {
        let response = JSON.parse(data);

        if (response.responseCode !== 0) {
          $(".login-msg").html(`<strong>${response.responseMessage}</strong>`);
          $(".login-msg").show();
        } else {
          $("#login-btn").prop("disabled", true);
          $("#login-btn").html(`<i class="mdi mdi-rotate-left"></i> Logging`);
          $(".login-msg").html(`<strong>${response.responseMessage}</strong>`);
          $(".login-msg").show();

          setTimeout(() => {
            location.href = "dashboard.php";
          }, 1000);
        }
      });
    } else {
      $(this).parsley();
    }
  });
});
