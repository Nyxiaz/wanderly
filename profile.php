<?php

session_start();
include "php/db.php";

if(!isset($_SESSION['user_id'])){
header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id=$user_id";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
<title>Profile - Wanderly</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
<h1>Wanderly</h1>

<nav>
<a href="index.php">Home</a>
<a href="travel.php">Travel</a>
<a href="packages.php">Packages</a>
<a href="logout.php">Logout</a>
</nav>

</header>

<div class="container">

<h2>My Profile</h2>

<p><b>Name:</b> <?php echo $user['name']; ?></p>

<p><b>Email:</b> <?php echo $user['email']; ?></p>

<h2>My Bookings</h2>

<?php

$sql = "SELECT * FROM bookings WHERE user_id=$user_id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row = mysqli_fetch_assoc($result)){

echo "<div style='border:1px solid #ccc;padding:10px;margin:10px;'>";

echo "<p>Booking ID: ".$row['id']."</p>";
echo "<p>Date: ".$row['booking_date']."</p>";
echo "<p>Status: ".$row['payment_status']."</p>";

echo "</div>";

}

}else{

echo "No bookings yet.";

}

?>

</div>

</body>
</html>