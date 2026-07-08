
$(document).ready(function () {

    // Real-time validation
    $('#userName').on('input', function () {
        let value = $(this).val().trim();

        if (value.length < 3) {
            showError(this, 'Name must be at least 3 characters');
        } else {
            removeError(this);
        }
    });

    $('#userEmail').on('input', function () {
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test($(this).val().trim())) {
            showError(this, 'Enter a valid email address');
        } else {
            removeError(this);
        }
    });

    $('#userMobile').on('input', function () {

        this.value = this.value.replace(/\D/g, '');

        if (this.value.length < 10) {
            showError(this, 'Enter a valid mobile number');
        } else {
            removeError(this);
        }
    });

    $('#userMsg').on('input', function () {
        if ($(this).val().trim().length < 10) {
            showError(this, 'Message must be at least 10 characters');
        } else {
            removeError(this);
        }
    });

    function showError(element, message) {

        removeError(element);

        $(element).addClass('input-error');

        $(element).after(
            '<span class="error-message">' + message + '</span>'
        );
    }

    function removeError(element) {
        $(element).removeClass('input-error');
        $(element).siblings('.error-message').remove();
    }

    $('.modern-contact-form').submit(function (e) {

        e.preventDefault();

        let name = $('#userName').val().trim();
        let email = $('#userEmail').val().trim();
        let mobile = $('#userMobile').val().trim();
        let message = $('#userMsg').val().trim();

        let valid = true;

        if (name.length < 3) {
            showError('#userName', 'Name must be at least 3 characters');
            valid = false;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showError('#userEmail', 'Enter a valid email address');
            valid = false;
        }

        if (!/^[0-9]{10,15}$/.test(mobile)) {
            showError('#userMobile', 'Enter a valid mobile number');
            valid = false;
        }

        if (message.length < 10) {
            showError('#userMsg', 'Message must be at least 10 characters');
            valid = false;
        }

        if (!valid) {
            return;
        }

        $.ajax({
            url: 'formleads.php',
            type: 'POST',
            data: {
                name: name,
                email: email,
                mobile: mobile,
                message: message
            },

            beforeSend: function () {
                $('.btn-submit-form')
                    .prop('disabled', true)
                    .text('Submitting...');
            },

            success: function (response) {

                if (response.trim() === 'success') {

                    Swal.fire({
                        icon: 'success',
                        title: 'Thank You!',
                        text: 'Your request has been submitted successfully.',
                        confirmButtonText: 'OK'
                    });

                    $('.modern-contact-form')[0].reset();

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed',
                        text: response
                    });
                }

                $('.btn-submit-form')
                    .prop('disabled', false)
                    .html('Submit Request <i class="fa-solid fa-paper-plane"></i>');
            },

            error: function () {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.'
                });

                $('.btn-submit-form')
                    .prop('disabled', false)
                    .html('Submit Request <i class="fa-solid fa-paper-plane"></i>');
            }
        });

    });

});