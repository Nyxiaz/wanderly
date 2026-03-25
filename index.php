<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Wanderly</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
<h1>Wanderly</h1>

<nav>

<a href="index.php">Home</a>
<a href="travel.php">Travel Booking</a>
<a href="packages.php">Packages</a>

<?php if(isset($_SESSION['user_id'])){ ?>

<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>

<?php } else { ?>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<?php } ?>

</nav>
</header>

<section class="hero">

<h2>Explore the World with Wanderly</h2>

<p>Find the best travel deals and packages</p>

<a class="hero-btn" href="packages.php">Explore Packages</a>

</section>
</body>
</html>