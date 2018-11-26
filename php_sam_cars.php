<?php
    include ('connection.php');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
    $cn = $_POST['cn'];
    $en = $_POST['en'];
    $nos = $_POST['nos'];
    $ca = $_POST['ca'];
    $gid = $_POST['gid'];
    $query = mysqli_query($conn, "UPDATE cars SET car_no=$cn,engine_no=$en,no_of_seat=$nos,car_age=$ca,garage_id=$gid WHERE car_no=$cn");
    }
    ?>
    