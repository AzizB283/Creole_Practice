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

    submitHandler: function (form) {
      var data = $("#resetForm").serialize();
      var email = $("#cemail").val();
      $.ajax({
        type: "POST",
        url: "forgotprocess.php",
        data: { email: email },
        beforeSend: function () {

          $(".loader").show();
          $("#loading").html("Please Wait...");
        },

        success: function (response) {

          if (response == 1) {

            location.href = "verifyotp.php";
            $("#loading").html(response).css({ 'color': 'green' });
            $("#loading").show();

          }

          else {
            $("#loading").html("Email not found").css({ 'color': 'red' });
            $(".loader").hide();
            // $("#loading").html("Email not found");
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

