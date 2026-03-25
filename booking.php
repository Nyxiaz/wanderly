<?php
include "php/db.php";

$package_id = $_GET['package_id'];

$sql = "SELECT * FROM packages WHERE id=$package_id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
<title>Book Package</title>
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

<h2>Book Your Trip</h2>

<h3><?php echo $row['title']; ?></h3>

<form action="process-booking.php" method="POST">

<input type="hidden" name="package_id" value="<?php echo $row['id']; ?>">

<label>Name</label><br>
<input type="text" name="name" required><br><br>

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Travel Date</label><br>
<input type="date" name="date" required><br><br>

<button type="submit" class="package-btn">Confirm Booking</button>

</form>

</div>

</body>
</html>