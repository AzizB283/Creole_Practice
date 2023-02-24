<?php

require "../Database/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM user_details WHERE id = '$id'";

$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$number = $row['number'];
$gender = $row['gender'];
$address = $row['address'];
// $folder = "../images/";
// $image = $folder. $row['image'];
// move_uploaded_file($_FILES['image']['tmp_name'],$image);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <script src="../jQuery/jquery.min.js"></script>
        <script src="../jQuery/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
        <script src="../jQuery/update.js"></script>

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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </div>
                </div>

                <div class="d-flex">
                        <!-- <button class="btn btn-outline-primary me-2" type="button"><a href="../Signup/signup.php">Sign Up</a></button> -->
                        <button class="btn btn-outline-primary me-2" type="button"><a href="../Login/logout.php">Log Out</a></button>
                    </div>
            </nav>
        </header>
        <br>
        <center><h1>Update Data</h1></center>

        <form enctype="multipart/form-data" action="" id="updateform" class = "container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" method="post">

            <div id="numerr">
            </div>

            <input type="hidden" name="id" value = "<?php echo $id ?>">

            <div class="mb-3">
                <label for="cname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10 mx-auto">
                    <input type="text" class="form-control error" id="cname" name="name" value="<?php echo $name; ?>" required>
                </div>
            </div>
                
            <div class="mb-3">
                <label for="cemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 mx-auto">
                <input type="email" class="form-control error" id="cemail" name="email" value = "<?php echo $email ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="cnumber" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-10 mx-auto">
                <input type="number" class="form-control error" id="cnumber" name="number" minlength=10 maxlength=10 value = "<?php echo $number; ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="cgender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10 mx-auto">
                    
                    Male <input type="radio" name="gender" class="form-check-input" id="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?>>
                    
                    
                   &nbsp; Female <input type="radio" name="gender" class="form-check-input" id="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>
                    
                  &nbsp;  Prefer Not To Say <input type="radio" name="gender" class="form-check-input" id="gender" value="Prefer not to say" <?php if($gender == 'Prefer not to say'){ echo "checked";} ?>><br>
                    <label id = "gender-error" class="error" for="gender"></label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <div class="col-sm-10 mx-auto">
                    <textarea name="address" class="form-control error" id="caddress" rows="5" cols="2"> <?php echo htmlspecialchars($address); ?></textarea>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Add Image</label>
                <div class="col-sm-10 mx-auto">
                    <p> <img src="../images/<?php echo$row['id']. '/'. $row['image']; ?>" width="75" height="75" /></p>
                    <input class="form-control error" type="file" id="image" name="image">
                </div>
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
                

