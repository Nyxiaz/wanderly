<?php

session_start();
include "php/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$package_id = $_POST['package_id'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO bookings
(user_id,name,email,booking_type,reference_id,booking_date,payment_status)
VALUES
('$user_id','$name','$email','package','$package_id','$date','Pending')";

if(mysqli_query($conn,$sql)){

header("Location: payment.php");

}else{

echo "Booking error";

}

?>