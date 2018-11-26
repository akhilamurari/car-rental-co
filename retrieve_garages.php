<!DOCTYPE html>
<html>
<head>
    <title>
       garages tables
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
    <h2>garage table</h2>
<table id="ctstyle">
    <tr>      
        
        <th>customer_id</th>
        <th>car_no</th>
        <th>car_rented_or_repaired</th>
        <th>payment_mode</th>                     
        <th>payment_amount</th>
        <th>garage_id</th>
    </tr>
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

$sql = "SELECT * FROM garages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["customer_id"]."</td>
        <td>" . $row["car_no"]. "</td>
        <td>" . $row["car_rented_or_repaired"]."</td>
        <td>" . $row["payment_mode"]. "</td>
        <td>" . $row["payment_amount"]. "</td>
        <td>" . $row["garage_id"]. "</td>
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