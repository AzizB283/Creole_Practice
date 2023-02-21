<?php
//    include('../Login/session.php');
include ('../Database/db.php');

$sql = "SELECT * FROM user_details";
$res = mysqli_query($conn, $sql);
//    session_start();
//    $name=$_SESSION['name'];
?>

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
            window.history.forward();
        </script>
        <style>
            .img{
                height : 80px;
                width : 80px;
                border : 2px solid black;
                border-radius : 50%;
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
                </div>
            </nav>
        </header>
        <br>
            
        <table class="table table-primary container table-bordered border-primary align-middle">
            <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                        
                        <th scope="col" colspan="2"><center>Action</center></th>
                    </tr>
            </thead>
            <tbody>

            <?php

            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $img = '<img class="img" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                    echo 
                    "<tr>
                        <th scope='row'>".$row['id']."</th>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['number']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['address']."</td>
                        <td>".$img."</td>
                        <td><button class='btn btn-primary'>Edit</button></td>
                        <td><button class='btn btn-primary'>Delete</button></td>
                      

                    </tr>";
                }
            }
            ?>
                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Aziz</td>
                        <td>aziz@gmail.com</td>
                        <td>8160739392</td>
                        <td>Male</td>
                        <td>Morbi</td>
                        <td>Avatar</td>
                        <td><button class="btn btn-primary">Edit</button></td>
                        <td><button class="btn btn-primary">Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sid</td>
                        <td>Sid@gmail.com</td>
                        <td>8160739392</td>
                        <td>Male</td>
                        <td>Morbi</td>
                        <td>Avatar</td>
                        <td><button class="btn btn-primary">Edit</button></td>
                        <td><button class="btn btn-primary">Delete</button></td>
                    </tr> -->
            </tbody>
        </table>

    
    </body>
</html>

