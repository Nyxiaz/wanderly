<?php
include "php/db.php";

$sql = "UPDATE bookings SET payment_status='Paid' ORDER BY id DESC LIMIT 1";

mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>
<title>Payment Successful</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
<h1>Wanderly</h1>

<nav>
<a href="index.php">Home</a>
<a href="travel.php">Travel Booking</a>
<a href="packages.php">Tour Packages</a>
</nav>

</header>

<div class="container">

<h2>Payment Successful 🎉</h2>

<p>Your trip has been booked successfully.</p>

<a class="package-btn" href="packages.php">Explore More Trips</a>

</div>

</body>
</html>