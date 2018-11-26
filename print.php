<!DOCTYPE html>
<html>
<head>
	<title>
		car booking tables
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
	<h2>car booking table</h2>
<table id="ctstyle">
	<tr>
		
        <th>customer_name</th>
        <th>car_no</th>
        <th>garage_id</th>
        <th>phone_no</th>
       </tr>
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

$sql = "SELECT  c2.customer_name,c.car_no , c1.garage_id , c2.phone_no  FROM cars c, crc c1,customer c2 where c.car_no=1245 and 
c2.customer_name='akhila' and c1.garage_id='214'";

$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo " customer_name: " . $row["customer_name"]. " car_no: " . $row["car_no"]. " garage_id: " . $row["garage_id"]. 
//           " phone_no: " . $row["phone_no"]. "<br>";
//     }

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["customer_name"]."</td>
        <td>" . $row["car_no"]. "</td>

        <td>" . $row["garage_id"]."</td>
<td>" . $row["phone_no"]. "</td>
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