<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
    <link rel="stylesheet" href="screen.css">
    <script src="jquery.min.js"></script>
    <script src="jquery.validate.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        #commentForm {
            margin: auto;
            width: 700px;
        }

        #numerr {
            color: red;
            font-size: 18px;
            margin: 20px;
            font-weight: bold;
        }

        .phperr {
            color : red;
        }
    </style>
</head>

<body>

<?php
$name = $email = $number = $url = $comment = $password = $agree = "";
$nameErr = $emailErr = $numberErr = $urlErr = $commentErr = $passwordErr = $agreeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])){
        $nameErr = "Please enter your name<br>";
    }
    else{
       
        if(!preg_match("/^[a-zA-Z ]+$/",$name = $_POST['name'])){
            $nameErr = "Only characters are allowed in name<br>"; 
            $name = "";     
        }
        else{
            $name = test_input($_POST['name']);
        }
    }

    if(empty($_POST['email'])){
        $emailErr = "Please enter valid email<br>";
    }
    else{
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format<br>";
            $email = "";
          }
          else{
            $email = test_input($_POST['email']);
          }
    }

    if(empty($_POST['number'])){
        $numberErr = "Please enter 10 digit number<br>";
    }
    else{
        
        if(!preg_match("/^[0-9]*$/",$number = $_POST['number'])){
            $numberErr = "Only digits are allowed<br>";
            $number = "";
        }
        else{
            $number = test_input($_POST['number']);
        }
    }

    // if(empty($_POST['url'])){
    //     $urlErr = "Please enter valid url<br>";
    //     echo $urlErr;
    // }
    // else{
    //     $url = test_input($_POST['url']);
    //     if(!preg_match("/^[a-z:\/\/]*$/",$url)){
    //         $urlErr = "Enter valid url<br>";
    //         echo $urlErr;
    //     }
    // }

    if(empty($_POST['comment'])){
        $commentErr = "Please enter some comment<br>";
    }
    else{
        $comment = test_input($_POST['comment']);
    }

    if(empty($_POST['password'])){
        $passwordErr = "Please enter password<br>";
    }
    else{
        $password = test_input($_POST['password']);
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
    


    <center>
        <h1>User Details</h1>
    </center>
    <form class="cmxform" id="commentForm" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div id="numerr"></div>

        <p>
            <label for="cname">Name (required, at least 3 characters)</label>
            <input id="cname" name="name" type="text" class="error" required>
            <label class="phperr"><?php echo $nameErr;?></label>
            
        </p>
        
        <p>
            <label for="cemail">E-Mail (required)</label>
            <input id="cemail" type="email" name="email" class="error" value=" " required>
            <label class="phperr"><?php echo $emailErr;?></label>
        </p>

        <p>
            <label for="cnumber">Phone Number (required)</label>
            <input id="cnumber" type="number" name="number" class="error" required minlength="10" maxlength="10">
            <label class="phperr"><?php echo $numberErr;?></label>

        </p>

        <p>
            <label for="curl">URL (Optional)</label>
            <input id="curl" type="url" name="url" class="error">
        </p>
        <p>
            <label for="ccomment">Your comment (required)</label>
            <textarea id="ccomment" name="comment" class="error" required></textarea>
            <label class="phperr"><?php echo $commentErr;?></label>
        </p>

        <p>
            <label for="cpassword">Password (required)</label>
            <input id="cpassword" name="password" type="password" class="error" minlength="6" maxlength="10">
            <label class="phperr"><?php echo $passwordErr;?></label>

        </p>

        <p>
            <label for="cagree">Please agree to our privacy policy (required)</label>
            <input id="cagree" name="agree" type="checkbox" class="error" required>
            
        </p>


        <p>
            <input class="submit" type="submit" value="Submit">
        </p>



    </form>


   
    <script>
        // code to show number of missing fields in form
        $("#commentForm").validate({
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

            // add ignore class in which you want to disable validation
            ignore: ".ignore",


            // rules are used to add specific messages or rules
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: "required",
                number: "required",
                comment: "required",
                password: "required",
                agree: "required"


            },
            messages: {
                name: {
                    required: "Please enter name that is atleast 3 character long",

                },

                email: {
                    required: "Please enter valid email address",
                },

                number: {
                    required: "Enter your number",
                    number: "Please, enter 10 digit only",
                    minlength: jQuery.validator.format("Please, Enter 10 digits only")
                },

                comment: {
                    required: "Please enter some comment",
                },

                password: {
                    required: "Please create password",
                    minlength: jQuery.validator.format("Password must be 6 characters long")
                    
                },

                agree: {
                    required: "Please agree to our policy to move forward",
                },
            },


            // onsubmit : false will disable onsubmit validation, allowing the user to submit whatever he wants
            // onsubmit : false,


            // focusInvalid - Focus the last active or first invalid element on submit via validator
            // focusInvalid : false,


            //focusCleanup - Enables cleanup when focusing elements, removing the error class and hiding error messages when an element is focused.
            // focusCleanup: true,


            // errorClass - Use this class to create error labels, to look for existing error labels and to add it to invalid elements
            // errorClass : "invalid",


            // validClass  - This class is added to an element after it was validated and considered valid.
            // validClass : "success",


            // errorElement - how to show error msg - The default, "label"
            // errorElement : "em",


            // wrapper - Wrap error labels with the specified element
            // wrapper : "li",


            // errorLabelContainer - All error labels are displayed inside an unordered list with the ID #numerr
            // errorLabelContainer: "#numerr",
            // submitHandler: function () {
            //     alert("Submitted")
            // },


            // showError - A custom message display handler.
            // showErrors: function (errorMap, errorList) {
            //     $("#numerr").html("Your form contains "
            //         + this.numberOfInvalids()
            //         + " errors, see details below.");
            //     this.defaultShowErrors();
            // }

        });

    </script>

    <script src="number.js"></script>

    <script>

        const phoneInputField = document.querySelector("#cnumber");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>




</body>

</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    echo "<h2>Your Input:</h2>";
    
    if(empty($_POST['submit'])){
        
        echo "<table border=1 cellpadding = 5>
        
        <tbody>
        
        <tr>
        <th>Name</th>
        <td>".$name. "</td>
        </tr> 
        
        <tr>
        <th>Email</th>
        <td>".$email. "</td>
        </tr>
        
        <tr>
        <th>Number</th>
        <td>".$number. "</td>
        </tr>
        
        <tr>
        <th>URL</th>
        <td>".$url. "</td>
        </tr>
        
        <tr>
        <th>Comment</th>
        <td>".$comment. "</td>
        </tr>
        
        <tr>
        <th>Password</th>
        <td>".$password. "</td>
        </tr>
        
        </tbody>
        </table>";
        
    }
}
    
    

// echo $email;
// echo "<br>";
// echo $number;




?>





