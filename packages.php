<?php
include "php/db.php";
?>

<!DOCTYPE html>
<html>

<head>
<title>Tour Packages</title>
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

<h2>Tour Packages</h2>

<div class="packages">

<?php

$sql = "SELECT * FROM packages";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

?>

<div class="package-card">

<img src="images/<?php echo $row['image']; ?>">

<div class="package-info">

<h3><?php echo $row['title']; ?></h3>

<p>📍 <?php echo $row['location']; ?></p>

<p>🕒 <?php echo $row['duration']; ?></p>

<p class="price">₹<?php echo $row['price']; ?></p>

<a class="package-btn" href="package-details.php?id=<?php echo $row['id']; ?>">View Details</a>

</div>

</div>

<?php
}
?>

</div>

</div>

</body>
</html>