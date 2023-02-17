
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../jQuery/jquery.min.js"></script>
    <script src="../jQuery/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="../Css/style.css">

    <script>
        $(document).ready(function(){

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

            submitHandler: function(form){
                // var data = $("#verifyForm").serialize();
                var otp = $("#number").val();

            $.ajax({
            type: "POST",
            url: "verifyprocess.php",
            data: { otp: otp},
            success: function(response) {
            // Handle the response from the server
            $("#loading").html(response).css({'color':'green'});    
            $("#loading").show();
            location.href ="resetpass.php";
            },
            error: function(xhr, status, error) {
            // Handle the error from the server
            console.log(xhr.responseText);
            }
            });


            }

            });


});

    </script>


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
    <button class="btn btn-outline-primary me-2" type="button"><a href="../Signup/signup.php">Sign Up</a></button>
    <button class="btn btn-outline-primary me-2" type="button"><a href="../Login/login.php">Log In</a></button>
    </div>
</div>
</nav>
</header>
<br>
<center><h1>Reset Password</h1></center>

    <form action="" class = "container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" method="post" id="verifyForm">

    <div id="numerr"></div>


        <div class="mb-3">
            <label for="cemail" class="col-sm-2 col-form-label">Verify OTP</label>
            <div class="col-sm-10 mx-auto">
                <input type="number" class="form-control error" id="number" name="otp" required>
            </div>
        </div>

     

        <div class="mb-3">
        <button class="submit btn btn-primary" id="submit">Verify OTP</button>
        </div><br>


        <div class="mb-3">
            <p id="loading" style ="font-weight : bold"></p>
        </div>
        
    </form>

    <script>
       
   </script>
</body>
</html>

