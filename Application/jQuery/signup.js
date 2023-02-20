$(document).ready(function () {


    $("#signupform").validate({
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
            name: {
                required: true,
                minlength: 3
            },
            email: "required",
            password: "required",


        },
        messages: {
            name: {
                required: "Please enter name that is atleast 3 character long",

            },

            email: {
                required: "Please enter valid email address",
            },

            password: {
                required: "Please create password",
                minlength: jQuery.validator.format("Password must be 6 characters long")

            },

        },


        submitHandler: function (form) {
            var data = $("#signupform").serialize();
            $.ajax({
                type: "post",
                url: "signupdb.php",
                data: data,
            }).done(function (res) {
                res = JSON.parse(res);
                if (res['status']) {
                    $("#loading").html("Account created successfully. <br> Click to Log in button");
                }
                else {
                    var errorMessage = '';

                    $("#loading").html((res.msg));
                    $.each(res['msg'], function (index, message) {
                        errorMessage += '<div>' + message + '</div>';
                    });

                    $("#error-msg").html(errorMessage);
                    $("#error-msg").show();


                }
            }).fail(function () {
                alert("error");
            })

        }

    })
})

