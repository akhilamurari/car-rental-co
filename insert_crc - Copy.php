<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color:#f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.crc {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#bt{

  background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font: 400 13.3333px Arial;
}
</style>
</head>
<body>
  </div>
 
    
   <form class="modal-content animate" method="post" action="insert_crc.php">
    <div class="imgcontainer">
   
      <img src="img/cars2.png" alt="car rental co" class="crc">
    </div>
     <!-- <div align="center"> -->
    <!-- <a id="bt" href="#">insert</a>
    
    <a id="bt" href="retrieve_crc.php">view</a>
<a id="bt" href="update_crc.php">update</a>
   
<a id="bt" href="#">delete</a>

</div> -->

    <div class="container">
      <label for="garage_id"><b>garage_id</b></label>
      <input type="text" placeholder="Enter garage id" name="garage_id" required>

      <label for="duration_of_agreement"><b>duration_of_agreement</b></label>
      <input type="text" placeholder="Enter duration of agreement" name="duration_of_agreement" required>
      <label for="no_of_cars"><b>no_of_cars</b></label>
      <input type="text" placeholder="Enter no of cars" name="no_of_cars" required>
      <label for="revenve_from_each_garage"><b>revenve_from_each_garage</b></label>
      <input type="text" placeholder="Enter revenve from each garage" name="revenve_from_each_garage" required>
      <label for="no_of_customers"><b>no_of_customers</b></label>
      <input type="text" placeholder="Enter no of customers" name="no_of_customers" required>
      <label for="garage_name"><b>garage_name</b></label>
      <input type="text" placeholder="Enter garage name" name="garage_name" required>
        
      <button type="submit">submit</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>




<?php
$garage_id = filter_input(INPUT_POST, 'garage_id');
 $duration_of_agreement = filter_input(INPUT_POST, 'duration_of_agreement');
 $no_of_cars=filter_input(INPUT_POST,'no_of_cars');
 $revenve_from_each_garage=filter_input(INPUT_POST,'revenve_from_each_garage');
  $no_of_customers=filter_input(INPUT_POST, 'no_of_customers');
 $garage_name=filter_input(INPUT_POST,'garage_name');
 if (!empty($garage_id)){
if (!empty($duration_of_agreement)){
  if(!empty($no_of_cars)){
    if(!empty($revenve_from_each_garage)){
    if(!empty($no_of_customers)){
      if(!empty($garage_name)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO crc (garage_id, duration_of_agreement, no_of_cars, revenve_from_each_garage, no_of_customers, garage_name)
  values ('$garage_id','$duration_of_agreement','$no_of_cars', '$revenve_from_each_garage', '$no_of_customers','$garage_name')";

  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}}
}
}
}
}
else{
  echo "garage_id should not be empty";
  die();
}
 }

 ?>