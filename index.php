<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Wanderly</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Header with navigation -->
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

<!-- Carousel Section -->
<div id="wanderlyCarousel" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-indicators">
<button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="2"></button>
<button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="3"></button>
</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="images/slide1.jpg" class="d-block w-100 carousel-img">
<div class="carousel-caption">
<h2>Explore the World with Wanderly</h2>
<p>Your journey begins here</p>
</div>
</div>

<div class="carousel-item">
<img src="images/slide2.jpg" class="d-block w-100 carousel-img">
<div class="carousel-caption">
<h2>Discover Amazing Destinations</h2>
<p>With Wanderly, your dream vacation is just a click away.</p>
</div>
</div>

<div class="carousel-item">
<img src="images/slide3.jpg" class="d-block w-100 carousel-img">
<div class="carousel-caption">
<h2>Unforgettable Experiences</h2>
<p>Create memories that last a lifetime with Wanderly.</p>
</div>
</div>

<div class="carousel-item">
<img src="images/slide4.jpg" class="d-block w-100 carousel-img">
<div class="carousel-caption">
<h2>Join Our Community</h2>
<p>Connect with fellow travelers and share your experiences.</p>
</div>
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#wanderlyCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#wanderlyCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<!-- Search Section -->
<div class="container mt-4">
<div class="row g-2 justify-content-center">

<div class="col-md-3">
<input type="text" class="form-control" placeholder="From">
</div>

<div class="col-md-3">
<input type="text" class="form-control" placeholder="To">
</div>

<div class="col-md-2">
<input type="date" class="form-control">
</div>

<div class="col-md-2">
<button class="btn btn-primary w-100">Search</button>
</div>

</div>
</div>

<!-- About Section -->

<section class="about">

<h2>About Wanderly</h2>

<p>
Wanderly helps travelers discover amazing destinations,
book travel packages, and plan journeys effortlessly.
</p>

</section>

<!-- Features Section -->
<section class="features">

<div class="feature-card">
<h3>Easy Booking</h3>
<p>Book trips in seconds.</p>
</div>

<div class="feature-card">
<h3>Best Prices</h3>
<p>Affordable travel deals.</p>
</div>

<div class="feature-card">
<h3>Secure Payment</h3>
<p>Safe payment system.</p>
</div>

</section>

<?php
include "php/db.php";
$sql = "SELECT * FROM packages LIMIT 3";
$result = mysqli_query($conn,$sql);
?>


<footer>

<p>© 2026 Wanderly Travel Booking System</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>