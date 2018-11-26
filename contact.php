<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div class="container">  
    
  <form id="contact" method="post"  action="contact_us.php">
    <h3 style="text-align: center">ContactUs</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 </div>
</body>
</html>


<?php
 $name = filter_input(INPUT_POST, 'name');
  $email=filter_input(INPUT_POST,'email');
 $phone_number=filter_input(INPUT_POST,'phone_number');
  $message=filter_input(INPUT_POST, 'message');
 if (!empty($name)){
if (!empty($email)){
 if (!empty($phone_number)){
if (!empty($message)){  
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin";

// Create connection
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO contact_us (name,email,phone_number,message)
  values ('$name','$email','$phone_number','$message')";
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
}else{
  echo "phone_number should not be empty";
  die();
}

 }
?>