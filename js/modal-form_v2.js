$(function() {

    // Get the form.
    var modalForm = $('#project-form');

    // Get the alerts divs
    var modalFormSuccess = $('#modal-form-success');
    var modalFormError = $('#modal-form-error');

    // hide alerts initially
    modalFormSuccess.hide();
    modalFormError.hide();


    $(modalForm).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

        // Serialize the form data.
        var modalFormData = $(modalForm).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(modalForm).attr('action'),
            data: modalFormData
        }).done(function() {
            // Show the success alert
            $(modalFormSuccess).show();

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
            $(modalFormError).show();

        });
    });
});


// stop body scrolling behind modal - iOS bug

$('.modal').on('shown.bs.modal', function () {
    $('body').addClass('stopScroll');
});

$('.modal').on('hidden.bs.modal', function () {
    $('body').removeClass('stopScroll');
});

