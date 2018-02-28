$(function() {

    // Get the form.
    var form = $('#quick-contact');

    // Get the alerts divs
    var formSuccess = $('#form-success');
    var formError = $('#form-error');

    // hide alerts initially
    formSuccess.hide();
    formError.hide();


    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function() {
            // Show the success alert
            $(formSuccess).show();

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        }).fail(function() {
            // Show the error alert if something goes wrong
            $(formError).show();

        });
    });
});
