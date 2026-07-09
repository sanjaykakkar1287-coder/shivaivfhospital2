$(document).on("submit", "#forgotPasswordForm", function (e) {

    e.preventDefault();

    var form = $(this);

    $.ajax({
        url: "forgot-password-process.php",
        type: "POST",
        data: form.serialize(),

        success: function (response) {

            response = $.trim(response);

            $("#msg")
                .removeClass("d-none alert-success alert-danger");

            if (response == "success") {

                $("#msg")
                    .addClass("alert-success")
                    .text("Reset password link has been sent to your email.");

            } else {

                $("#msg")
                    .addClass("alert-danger")
                    .text(response);

            }
        },

        error: function () {
            $("#msg")
                .removeClass("d-none")
                .addClass("alert alert-danger")
                .text("Something went wrong.");
        }

    });

});