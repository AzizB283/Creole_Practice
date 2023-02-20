$(document).ready(function () {

    $("#verifyForm").validate({
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
            // var data = $("#verifyForm").serialize();
            var otp = $("#number").val();

            $.ajax({
                type: "POST",
                url: "verifyprocess.php",
                data: { otp: otp },
                success: function (response) {

                    if (response == 1) {

                        // Handle the response from the server
                        $("#loading").html("Verified Successfully").css({ 'color': 'green' });
                        $("#loading").show();
                        location.href = "resetpass.php";
                    }

                    else {

                        // $("#loading").html(response);
                        $("#loading").html("Invalid OTP").css({ 'color': 'red' });
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
