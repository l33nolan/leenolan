$(function() {

    // Get the form.
    var form = $('#project-form');

    // Get the alerts divs
    var formSuccess = $('#modal-form-success');
    var formError = $('#modal-form-error');

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
            $('#number').val('');
            $('#business').val('');
            $('#competitors').val('');
            $('#url').val('');
            $('#like').val('');
            $('#notlike').val('');
            $('#admire').val('');
            $('#golive').val('');
            $('#budget').val('');
            $('#look').val('');
            $('#aim').val('');
            $('#users').val('');
            $('#content').val('');
            $('#branding').val('');
            $('#sections').val('');
            $('#features').val('');
        }).fail(function() {
            // Show the error alert if something goes wrong
            $(formError).show();

        });
    });
});
