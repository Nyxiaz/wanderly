<?php
include "php/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM packages WHERE id=$id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
<title><?php echo $row['title']; ?></title>
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

<h2><?php echo $row['title']; ?></h2>

<img src="images/<?php echo $row['image']; ?>" style="width:100%;max-height:400px;object-fit:cover;border-radius:10px;">

<p><b>Location:</b> <?php echo $row['location']; ?></p>

<p><b>Duration:</b> <?php echo $row['duration']; ?></p>

<p><b>Price:</b> ₹<?php echo $row['price']; ?></p>

<p><b>Description:</b> <?php echo $row['description']; ?></p>

<br>

<a class="package-btn" href="booking.php?package_id=<?php echo $row['id']; ?>">Book Now</a>

</div>

</body>
</html>