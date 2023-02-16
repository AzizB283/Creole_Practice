<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../jQuery/jquery.min.js"></script>
    <script src="../jQuery/jquery.validate.min.js"></script>

    <link rel="stylesheet" href="../Css/style.css">


</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TechCupid</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </div>
    </div>

    <div class="d-flex">
    <button class="btn btn-outline-primary me-2" type="button"><a href="#">Sign Up</a></button>
    <button class="btn btn-outline-primary me-2" type="button"><a href="../Login/login.php">Log In</a></button>
    </div>
</div>
</nav>
</header>
<br>
<center><h1>Sign Up</h1></center>

    <form action="signupdb.php" class = "container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" method="post" id="commentForm">

    <div id="numerr"></div>


        <div class="mb-3">
            <label for="cname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10 mx-auto">
                <input type="text" class="form-control error" id="cname" name="name" required>
            </div>
        </div>

        
        <div class="mb-3">
            <label for="cemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10 mx-auto">
                <input type="email" class="form-control error" id="cemail" name="email" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="cpassword" class="col-sm-2 col-form-label">Password</label>

            <div class="col-sm-10 mx-auto">
            <input id="cpassword" name="password" type="password" class="form-control error" minlength="6" maxlength="10" required>

            </div>
            
        </div>

        <!-- <div class="mb-3">
            <label for="formFile" class="form-label">Upload Avatar</label>
            <div class="col-sm-10 mx-auto">
            <input class="form-control error" type="file" id="formFile" name="image" required>
            </div>
        </div> -->

        <div class="mb-3">
            <button class="submit btn btn-primary" id="submit">Sign Up</button>
        </div>

        <div class="mb-3">
            <p>Already have an account ? Sign in here.</p>
            <button class="submit btn btn-primary" id="submit"><a href="../Login/login.php">Log In</a></button>
        </div>
        
    </form>

    <script>
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

                // number: {
                //     required: "Enter your number",
                //     number: "Please, enter 10 digit only",
                //     minlength: jQuery.validator.format("Please, Enter 10 digits only")
                // },

                // comment: {
                //     required: "Please enter some comment",
                // },

                password: {
                    required: "Please create password",
                    minlength: jQuery.validator.format("Password must be 6 characters long")
                    
                },

                // agree: {
                //     required: "Please agree to our policy to move forward",
                // },
            },

        });
   </script>
</body>
</html>
