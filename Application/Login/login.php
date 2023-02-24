<?php

$email = $password = "";
$emailErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"]=='POST'){


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

<!DOCTYPE html>
<html lang="en">
    <head>
        <META Http-Equiv="Cache-Control" Content="no-cache"/>
        <META Http-Equiv="Pragma" Content="no-cache"/>
        <META Http-Equiv="Expires" Content="0"/>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="../jQuery/jquery.min.js"></script>
        <script src="../jQuery/jquery.validate.min.js"></script>
        <script src="../jQuery/login.js"></script>
        <link rel="stylesheet" href="../Css/style.css">
        <script>
            window.history.forward();
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
                <button class="btn btn-outline-primary me-2 signup" type="button"><a href="../Signup/signup.php">Sign Up</a></button>
                <button class="btn btn-outline-primary me-2 login" type="button"><a href="#"></a> Log In</a></button>
                </div>
                </div>
            </nav>
        </header>
        <br>
        <center><h1>Login</h1></center>

        <form action="" id="loginform" class = "container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" method="post">

            <div id="numerr"></div>

            <div class="mb-3">
                <label for="cemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 mx-auto">
                    <input type="email" class="form-control error" id="cemail" name="email" value="<?php if (isset($_COOKIE["email"])) {echo $_COOKIE["email"];}?>">
                </div>
                <label class="phperr"><?php echo $emailErr;?></label>
            </div>

            <div class="mb-3">
                <label for="cpassword" class="col-sm-2 col-form-label">Password</label>

                <div class="col-sm-10 mx-auto">
                <input id="cpassword" name="password" type="password" class="form-control error" minlength="6" maxlength="10" value="<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>">
                <label class="phperr"><?php echo $passwordErr;?></label>
                </div>
            </div>

            <div class="mb-3">

                <p><input type="checkbox" name="remember"/>Remember me</p>
            </div>

            <div class="mb-3">
                <button class="submit btn btn-primary login" id="submit">Log In</button>
            </div><br>

            <div class="mb-3">
                <p id="loading" style ="color:red; font-weight : bold"></p>
            </div>

            <div class="mb-3">
                <p>Don't have account ? Sign up here.</p>
                    <button class="submit btn btn-primary signup" id=""><a href="../Signup/signup.php">Sign Up</a></button>
            </div>
            <br>
            <div class="mb-3">
                <p>Don't remember password ? <a href="../Resetpass/forgotpass.php" style= "color : blue;" id="forgot">Click Here</a></p>
            </div>

        </form>

    </body>
</html>
