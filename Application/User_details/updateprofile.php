<?php

include "../Login/logindb.php";

$session_email = $_SESSION['email'];

$sql = "SELECT * FROM user_details WHERE email = '$session_email'";

$res = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($res)){
    $name = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $gender = $row['gender'];
    $address = $row['address'];
    // $image = $row['image'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> -->
        <link rel="stylesheet" href="../Css/style.css">
        <script src="../jQuery/jquery.min.js"></script>
        <script src="../jQuery/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
        <script src="../jQuery/updateprofile.js"></script>
       
        <style>
            .gradient-custom {
            /* fallback for old browsers */
            background: #0b5ed7;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, #86b1f2, #0b5ed7);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom,#86b1f2, #0b5ed7);
            }


            .section {
            height: 100vh;
            }

            .container {
            height: 80%;
            }

            .card {
            font-size: 1.5rem;
            padding : 2rem;
            
            }

            .col-lg-6 {
            width: 80%;
            }

            .form-control{
                font-size : 1rem;
            }

            .span{
                font-size : 1rem;
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
                        <!-- <input class="" type="search" name="" id="search" placeholder = "Search here...">&nbsp; -->

                    </div>
                    <div class="d-flex">
                        <!-- <button class="btn btn-outline-primary me-2" type="button"><a href="../Signup/signup.php">Sign Up</a></button> -->
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="welcome.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="updateprofile.php">Update Profile</a></li>
                                <li><a class="dropdown-item" href="../Login/logout.php">Log out</a></li>
                            </ul>&nbsp;&nbsp;
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <button class="btn btn-outline-primary me-2" type="button"><a href="create.php">Add New Profile</a></button>
                      
                    </div>
                </div>
            </nav>
        </header>
        
        <section class="vh-100" style="background-color: ;">
            <form enctype="multipart/form-data" action="" method="post" id="updateprofile">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                 style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="../images/<?php echo$row['id']. '/'. $row['image']; ?>"
                                    alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
                                    <h3><?php echo $name; ?></h3>
                                    <i class="far fa-edit mb-5"></i><br><br>
                                    <div class="col-sm-10 mx-auto">
                                        <input class="form-control error" type="file" id="image" name="image">
                                    </div>
                                </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h2>Information</h2>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h5>Name</h5>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control error" id="cname" name="name" value="<?php echo $name; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h5>Gender</h5>
                                        <div class="col-sm-10">
                                            
                                            <span class="span">Male</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?>>
                                            
                                            
                                            &nbsp; <span class="span">Female</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>
                                    
                                            &nbsp;  <span class="span">Prefer Not To Say</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Prefer not to say" <?php if($gender == 'Prefer not to say'){ echo "checked";} ?>><br>
                                            <label id = "gender-error" class="error" for="gender"></label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h5>Email</h5>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control error" id="cemail" name="email" value = "<?php echo $email ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h5>Phone</h5>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control error" id="cnumber" name="number" minlength=10 maxlength=10 value = "<?php echo $number; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                    <hr class="mt-0 mb-4">
                                    
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h5>Address</h5>
                                            <!-- <p class="text-muted"><?php echo $address ?></p> -->
                                            <div class="col-sm-10">
                                                <textarea name="address" class="form-control error" id="caddress" rows="2" cols="2"> <?php echo htmlspecialchars($address); ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <center> 

                                        <div class="mb-4">
                                            <button class="submit btn btn-primary" id="submit">Update Profile</button>
                                        </div>
                                    </center>
                                </div>
                                
                                <div class="mb-3">
                                <p id="loading" style ="font-weight : bold"></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </section>
    </body>
    </html>