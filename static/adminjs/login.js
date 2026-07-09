$(document).ready(function () {

    $("#adminLoginForm").submit(function (e) {
        e.preventDefault();

        var email = $("#email").val();
        var password = $("#password").val();
        var errorBanner = $("#login-error-message");
        var submitBtn = $(".btn-login");

        if (email == "" || password == "") {
            errorBanner.text("Email and Password are required.").show();
            return;
        }

        $.ajax({
            url: "../adminpages/loginphp.php",
            type: "POST",
            data: {
                email: email,
                password: password
            },
            beforeSend: function () {
                submitBtn.prop("disabled", true).text("Authenticating...");
                errorBanner.hide();
            },
            success: function (response) {

                response = $.trim(response);

                if (response == "success") {
                    window.location.href = "../adminpages/dashboard.php";
                } else {
                    errorBanner.text(response).show();
                }
            },
            error: function () {
                errorBanner.text("Server Error!").show();
            },
            complete: function () {
                submitBtn.prop("disabled", false).text("Login Securely");
            }
        });

    });

});