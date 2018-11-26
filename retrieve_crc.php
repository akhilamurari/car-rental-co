<!DOCTYPE html>
<html>
<head>
	<title>
		station tables
	</title>
	<style >
#ctstyle
 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#ctstyle td, #ctstyle th {
    border: px solid #ddd;
    padding: 8px;
}

#ctstyle tr:nth-child(even){background-color: #f2f2f2;}

#ctstyle tr:hover {background-color: #ddd;}

#ctstyle th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #7575a3;
    color: white;
}		
	</style>
</head>
<body>
	<h2>crc table</h2>
<table id="ctstyle">
	<tr>
		
        <th>garage_id</th>
        <th>duration_of_agreement</th>
        <th>no_of_cars</th>
        <th>revenve_from_each_garage</th>
        <th>no_of_customers</th>
        <th>garage_name</th>
	</tr>




<!-- <?php
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

$sql = "SELECT * FROM crc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "garage_id: " . $row["garage_id"]. " duration_of_agreement: " . $row["duration_of_agreement"]." no_of_cars: " . $row["no_of_cars"]. " revenve_from_each_garage: " . $row["revenve_from_each_garage"]. " no_of_customers: " . $row["no_of_customers"]. " garage_name: " . $row["garage_name"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> -->


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM crc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["garage_id"]."</td>
        <td>" . $row["duration_of_agreement"]. "</td>

        <td>" . $row["no_of_cars"]."</td>
<td>" . $row["revenve_from_each_garage"]. "</td>
        <td>" . $row["no_of_customers"]. "</td>
        <td>" . $row["garage_name"]."</td>
        

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>


</body>
</html>