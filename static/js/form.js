
$(document).ready(function () {

    // Real-time validation

$(document).on('input', '.form-name', function () {

    let value = $(this).val().trim();

    if (value.length < 3) {
        showError(this, 'Name must be at least 3 characters');
    } else {
        removeError(this);
    }

});

$(document).on('input', '.form-email', function () {

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test($(this).val().trim())) {
        showError(this, 'Enter a valid email address');
    } else {
        removeError(this);
    }

});

$(document).on('input', '.form-mobile', function () {

    this.value = this.value.replace(/\D/g, '');

    if (this.value.length < 10) {
        showError(this, 'Enter a valid mobile number');
    } else {
        removeError(this);
    }

});

$(document).on('input', '.form-message', function () {

    if ($(this).val().trim().length < 10) {
        showError(this, 'Message must be at least 10 characters');
    } else {
        removeError(this);
    }

});

function showError(element, message) {

    removeError(element);

    $(element).addClass('input-error');
    $(element).after('<span class="error-message">' + message + '</span>');
}

function removeError(element) {

    $(element).removeClass('input-error');
    $(element).siblings('.error-message').remove();

}
    $(document).on('submit', '.modern-contact-form', function (e) {

    e.preventDefault();

    const form = $(this);

    let name = form.find('.form-name').val().trim();
    let email = form.find('.form-email').val().trim();
    let mobile = form.find('.form-mobile').val().trim();
    let message = form.find('.form-message').val().trim();

    let valid = true;

    if (name.length < 3) {
        showError(form.find('.form-name')[0], 'Name must be at least 3 characters');
        valid = false;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError(form.find('.form-email')[0], 'Enter a valid email address');
        valid = false;
    }

    if (!/^[0-9]{10,15}$/.test(mobile)) {
        showError(form.find('.form-mobile')[0], 'Enter a valid mobile number');
        valid = false;
    }

    if (message.length < 10) {
        showError(form.find('.form-message')[0], 'Message must be at least 10 characters');
        valid = false;
    }

    if (!valid) return;

    $.ajax({
        url: './adminpages/formleads.php',
        type: 'POST',
        data: {
            name: name,
            email: email,
            mobile: mobile,
            message: message
        },
        beforeSend: function () {
            form.find('.btn-submit-form')
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
}).then(() => {

    form[0].reset();

    // Hide Bootstrap Modal
    $('.gynemodal').modal('hide');
});

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Submission Failed',
                    text: response
                });
            }

            form.find('.btn-submit-form')
                .prop('disabled', false)
                .html('Submit Request <i class="fa-solid fa-paper-plane"></i>');
        }
    });

});    });

