<!DOCTYPE html>
<html>
   
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
   
<body>
    <div id="content">
        <form method="POST" action="process.php" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
    <?php
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "creole_practice";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $query = "SELECT * from user_details";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img height="100px" src="images/<?php echo $data['image']; ?>">
 
    <?php
        }
    ?>
    </div>
</body>
 
</html>