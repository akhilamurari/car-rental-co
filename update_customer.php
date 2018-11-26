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
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.cars {
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
    </style>
    </head>
    <body>
       <form class="modal-content animate" method="post" action="update_customer.php">
        <div class="imgcontainer">
          <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
          <img src="img/customer.jpg" alt="cars" class="cars">
        </div>




        <div class="container">
      <label for="customer_id"><b>customer_id</b></label>
      <input type="text" placeholder="Enter customer id" name="customer_id" required>
      <label for="aadhar_no"><b>aadhar_no</b></label>
      <input type="text" placeholder="Enter aadhar no" name="aadhar_no" required>
      <label for="customer_name"><b>customer_name</b></label>
      <input type="text" placeholder="Enter customer name" name="customer_name" required>
      <label for="phone_no"><b>phone_no</b></label>
      <input type="text" placeholder="Enter phone no" name="phone_no" required>
      <label for="address"><b>address</b></label>
      <input type="text" placeholder="Enter address" name="address" required>
       <label for="age"><b>age</b></label>
      <input type="text" placeholder="Enter age" name="age" required>

      <button type="submit">submit</button>
    </div>
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
$customer_id = filter_input(INPUT_POST, 'customer_id');
$aadhar_no = filter_input(INPUT_POST, 'aadhar_no');
$customer_name = filter_input(INPUT_POST, 'customer_name');
$phone_no = filter_input(INPUT_POST, 'phone_no');
$address = filter_input(INPUT_POST, 'address');
$age = filter_input(INPUT_POST, 'age');

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
$sql = "UPDATE customer SET customer_id='$customer_id',aadhar_no='$aadhar_no',customer_name='$customer_name',phone_no='$phone_no',address='$address',age='$age'
  WHERE customer_id='$customer_id'";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>