$(document).ready(function(){
    
    $.validator.addMethod("filesize", function(value, element, param) {
        return this.optional(element) || (element.files[0].size <= param);
    }, "File size must be less than {0} bytes.");

    $("#updateprofile").validate({
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
            number: "required",
            gender:{
                required:true
            },
            address:"required",
            image:{
                required: true,
                extension: "png|jpe?g",
                filesize: 1048576, 
            },

        },
        messages: {
            name: {
                required: "Please enter name that is atleast 3 character long",

            },

            email: {
                required: "Please enter valid email address",
            },

            number: {
                required: "Please enter 10 digit phone number",
            },

            gender: {
                required: "Please select a gender",
            },

            address: {
                required: "Please enter your address",
            },

            image: {
                required: "Please upload your image",
                extension: "Please only upload jpg or png",
                filesize: "Filesize must be less than 1 Mb",
            },
        },


        submitHandler: function (form) {
            $.ajax({
                type: "post",
                url: "../User_details/updateprofiledb.php",
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData:false,
            }).done(function (res) {
                res = JSON.parse(res);
                if (res['status']) {
                    location.href = "../User_details/updateprofile.php";
                    $("#loading").html("User Details Updated Successfully");
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
            });
            
            return false;
        }
    });
});
