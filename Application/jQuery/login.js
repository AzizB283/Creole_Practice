$(document).ready(function () {

    $("#loginform").validate({
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

        submitHandler: function (form) {
            var data = $('#loginform').serialize();

            $.ajax({
                type: "post",
                url: "logindb.php",
                data: data,
            }).done(function (res) {
                res = JSON.parse(res);
                if (res['status']) {
                    location.href = "../User_details/welcome.php";
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
