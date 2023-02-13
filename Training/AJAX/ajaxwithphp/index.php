<html>
<head>

<script src="../jquery.min.js"></script>
<script src="index.js"></script>
</head>
<body>

<form>
<select name="users" id="select" >
  <option value="" selected disabled>Select a name:</option>
  <?php  

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "creole_practice";
  
  $id = $_POST['id'];
  $name = $_POST['name'];
  // print_r($_POST);
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $sql = "SELECT * FROM employee";

  $res = mysqli_query($conn, $sql);

  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
      
      echo "<option value =".$row['id'].">".$row['name']."</option>";
    }
  }


  ?>

  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>