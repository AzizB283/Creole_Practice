<?php

$name = $email = $number = $gender = $address = $image = "";
$nameErr = $emailErr = $numberErr = $genderErr = $addressErr = $imageErr = "";

if($_SERVER["REQUEST_METHOD"]=='POST'){

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

    if(empty($_POST['gender'])){
        $genderErr = "Please select one option<br>";
    }
    else{
        $gender = test_input($_POST['gender']);
    }

    if(empty($_POST['addess'])){
        $addressErr = "Please enter address<br>";
    }
    else{
        $address = test_input($_POST['address']);
    }

    if(empty($_POST['image'])){
        $imageErr = "Please upload image<br>";
    }
    else{
        $image = test_input($_POST['address']);
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
        <title>Add New Data</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="../jQuery/jquery.min.js"></script>
        <script src="../jQuery/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
        <script src="../jQuery/create.js"></script>

        <link rel="stylesheet" href="../Css/style.css"> 
        <style>
            label{
                font-weight:bold;
            }
        </style> 

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
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </div>
                </div>

                <div class="d-flex">
                        <!-- <button class="btn btn-outline-primary me-2" type="button"><a href="../Signup/signup.php">Sign Up</a></button> -->
                        <button class="btn btn-outline-primary me-2" type="button"><a href="../Login/logout.php">Log Out</a></button>
                    </div>
            </nav>
        </header>
        <br>
        <center><h1>Add New Data</h1></center>

        <form enctype="multipart/form-data" action="" id="createform" class = "container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" method="post">

            <div id="numerr">
            </div>


            <div class="mb-3">
                <label for="cname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10 mx-auto">
                    <input type="text" class="form-control error" id="cname" name="name" value="<?php echo $name; ?>">
                </div>
                <label class="phperr"><?php echo $nameErr;?></label>
            </div>
                
            <div class="mb-3">
                <label for="cemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 mx-auto">
                <input type="email" class="form-control error" id="cemail" name="email" value = "<?php echo $email; ?>">
                </div>
                <label class="phperr"><?php echo $emailErr;?></label>
            </div>

            <div class="mb-3">
                <label for="cnumber" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-10 mx-auto">
                <input type="number" class="form-control error" id="cnumber" name="number" minlength=10 maxlength=10 value = "<?php echo $number; ?>">
                </div>
                <label class="phperr"><?php echo $numberErr;?></label>
            </div>

            <div class="mb-3">
                <label for="cgender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10 mx-auto">
                    
                    Male <input type="radio" name="gender"  <?php if(isset($gender) && $gender == 'Male') echo "checked"; ?> class="form-check-input" id="gender" value="Male">
                    
                    
                   &nbsp; Female <input type="radio" name="gender" <?php if(isset($gender) && $gender == 'Female') echo "checked"; ?> class="form-check-input" id="gender" value="Female">
                    
                  &nbsp;  Prefer Not To Say <input type="radio" name="gender"  <?php if(isset($gender) && $gender == 'Prefer not to say') echo "checked"; ?> class="form-check-input" id="gender" value="Prefer not to say"><br>
                    <label id = "gender-error" class="error" for="gender"></label>
                </div>
                <label class="phperr"><?php echo $genderErr;?></label>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <div class="col-sm-10 mx-auto">
                    <textarea name="address" class="form-control error" <?php echo $address;?> id="caddress" rows="5" cols="2"></textarea>
                </div>
                <label class="phperr"><?php echo $addressErr;?></label>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Add Image</label>
                <div class="col-sm-10 mx-auto">
                    <input class="form-control error" type="file" id="image" value="<?php echo $image; ?>" name="image">

                </div>
                <label class="phperr"><?php echo $imageErr;?></label>
            </div>


            <div class="mb-3">
                <button class="submit btn btn-primary" id="submit">Add Data</button>
            </div>

            <div class="mb-3">
                <p id="loading" style ="font-weight : bold"></p>
            </div>
            
        </form>

    </body>
</html>
           
