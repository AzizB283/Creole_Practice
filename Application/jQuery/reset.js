$(document).ready(function () {

    $("#resetForm").validate({
        invalidHandler: function (event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'You missed 1 field.'
                    : 'You missed ' + errors + ' fields.';
                $("div#numerr").html(message);
                $("div#numerr").show();
            } else {
                $("div#numerr").hide();
            }
        },

        rules: {
            password: "required",


        },
        messages: {

            password: {
                required: "Please create password",
                minlength: jQuery.validator.format("Password must be 6 characters long"),

            },

        },

        submitHandler: function (form) {
            // var data = $("#verifyForm").serialize();
            var password = $("#cpassword").val();

            $.ajax({
                type: "POST",
                url: "resetprocess.php",
                data: { password: password },
                success: function (response) {

                    if (response == 1) {

                        // Handle the response from the server
                        $("#loading").html("New Password Set Successfully").css({ 'color': 'green' });
                        $("#loading").show();
                        location.href = "../Login/login.php";
                    }

                    else {

                        // $("#loading").html(response);
                        $("#loading").html("Error setting password").css({ 'color': 'red' });
                    }
                },
                error: function (xhr, status, error) {
                    // Handle the error from the server
                    console.log(xhr.responseText);
                }
            });


        }

    });


});

