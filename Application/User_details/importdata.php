<!DOCTYPE html>
<html>
<head>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Import Data</title>
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
                                <li><a class="dropdown-item" href="importdata.php">Import Excel Data</a></li>
                                <li><a class="dropdown-item" href="exportpdf.php">Export PDF</a></li>
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


            <div class="container"><br><br>
                <h1>Excel Upload</h1>


                <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <label>Upload Excel File</label><br><br>
                        <input type="file" name="file" class="form-control" accept=".xls,.xlsx">
                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" name="Submit" id="submit" class="btn btn-primary">Upload</button>
                    </div>
                    <p><strong>Only Excel Files Are Allowed</strong></p>
                </form>
            </div>




    </body>
</html>