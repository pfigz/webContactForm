$(document).ready(function() {
    $('#summernote').summernote();
  });

$("#formContact").validate({

    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        subject: {
            required: true
        },

    }
});



