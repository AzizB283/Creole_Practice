<?php
//    include('../Login/session.php');
include ('../Database/db.php');

session_start();

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
        <!-- <script src="../jQuery/delete.php"></script>  -->
        <link rel="stylesheet" href="../Css/style.css">
        
        <style>
            .img{
                height : 80px;
                width : 80px;
                border : 2px solid black;
                border-radius : 50%;
            }

            #msg{
                font-weight : bold;
                text-align:center;
                font-size: 24px;
            }

            #search{
                padding: 5px;
                margin: 5px;
                border : 3px solid black;
                border-radius : 5px;

            }
        </style>


            <script>
            $(document).ready(function(){
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });

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
                        <input class="" type="search" name="" id="search" placeholder = "Search here...">&nbsp;

                    </div>
                    <div class="d-flex">
                        <!-- <button class="btn btn-outline-primary me-2" type="button"><a href="../Signup/signup.php">Sign Up</a></button> -->
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Update Profile</a></li>
                                <li><a class="dropdown-item" href="../Login/logout.php">Log out</a></li>
                            </ul>&nbsp;&nbsp;
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <button class="btn btn-outline-primary me-2" type="button"><a href="create.php">Add New Data</a></button>
                      
                    </div>
                </div>
            </nav>
        </header>

        
            <form action="" method="post">
                <div class="mb-3">
                    
                    <!-- <input class="btn btn-primary" type="submit" value="Search"> -->
                </div>
            </form>
        <p id="msg">
            <?php
            if(isset($_SESSION['status'])){
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
            ?>
        </p>
            
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
            <tbody id="myTable">

            <?php

            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    echo 
                    "<tr>
                        <th scope='row'>".$row['id']."</th>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['number']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['address']."</td>" ?>
                        <td><img class="img" src="../images/<?php echo $row['image']; ?>"></td>

                       <?php 
                      echo "<td><button class='btn btn-primary'><a href='update.php?id=$row[id]'>Edit</a></button></td>
                        <td><button class='btn btn-primary'><a href = 'delete.php?id=$row[id]'>Delete</a></button></td>
                      

                    </tr>";
                }
            }
            ?>
            </tbody>
        </table>

    
    </body>
</html>

