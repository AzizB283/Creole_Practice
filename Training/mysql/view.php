<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "creole_practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pr_form";
$res = mysqli_query($conn, $sql);
echo "<center><h1>Display All Records</h1></center>";

echo "<table border=1 cellpadding = 25px>
        <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Action</th>
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
        <td>" . $row['age'] . "</td>
        <td>" . $row['gender'] . "</td>
        <td>" . $row['address'] . "</td>
        <td> <a href = 'delete1.php?id=$row[id]'>Delete</a></td>
        </tr>
        </tbody>
        ";
    }
    echo "</table>";
} else {
    echo "Error : " . mysqli_error($conn);
}

