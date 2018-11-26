<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT c.car_no , c1.garage_id  FROM cars c, crc c1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " car_no: " . $row["car_no"]. " garage_id: " . $row["garage_id"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
 