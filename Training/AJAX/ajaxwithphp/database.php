<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creole_practice";

$id = $_POST['id'];
// print_r($_POST);
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM employee WHERE id=".$id;

$res = mysqli_query($conn, $sql);

echo "<table border=1 cellpadding = 25px>
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>City</th>
<th>Salary</th>
</tr>
</thead>
";

if (mysqli_num_rows($res) > 0) {
while ($row = mysqli_fetch_assoc($res)) {
// print_r($row);
echo "
        <tbody>

<tr>
<td>" . $row['id'] . "</td>
<td>" . $row['name'] . "</td>
<td>" . $row['email'] . "</td>
<td>" . $row['city'] . "</td>
<td>" . $row['salary'] . "</td>
</tr>
</tbody>
";
}
echo "</table>";
} else {
echo "Error : " . mysqli_error($conn);
}


?>