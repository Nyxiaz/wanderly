<?php
session_start();
include "php/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Wanderly | Explore the World</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">Wanderly</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarNav">

<ul class="navbar-nav align-items-center">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="travel.php">Travel Booking</a>
</li>

<li class="nav-item">
<a class="nav-link" href="packages.php">Packages</a>
</li>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link btn btn-primary ms-lg-3 px-3 text-white" href="register.php">Register</a>
</li>

</ul>

</div>
</div>
</nav>



<!-- CAROUSEL -->

<div id="wanderlyCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#wanderlyCarousel" data-bs-slide-to="3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slide1.jpg" class="d-block w-100 carousel-img" alt="Explore">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Explore the World</h2>
                <p>Handpicked destinations for the ultimate traveler.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/slide2.jpg" class="d-block w-100 carousel-img" alt="Paradise">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Discover Paradise</h2>
                <p>Find your next escape with Wanderly.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/slide3.jpg" class="d-block w-100 carousel-img" alt="Unknown">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Experience the Unknown</h2>
                <p>Uncover hidden gems with Wanderly.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/slide4.jpg" class="d-block w-100 carousel-img" alt="Connect">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Connect with the World</h2>
                <p>Discover new cultures and experiences.</p>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#wanderlyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#wanderlyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- SEARCH CARD -->

<div class="container" style="position: relative; z-index: 20;">

<div class="card search-card p-4 shadow-lg border-0">

<form action="search.php" method="GET">

<div class="row g-3 align-items-end">

<div class="col-lg-3 col-md-6">

<label class="form-label small fw-bold text-uppercase text-muted">From</label>

<input type="text" name="from" class="form-control" placeholder="Origin City">

</div>



<div class="col-lg-3 col-md-6">

<label class="form-label small fw-bold text-uppercase text-muted">To</label>

<input type="text" name="to" class="form-control" placeholder="Destination">

</div>



<div class="col-lg-3 col-md-6">

<label class="form-label small fw-bold text-uppercase text-muted">Date</label>

<input type="date" name="travel_date" class="form-control">

</div>



<div class="col-lg-3 col-md-6">

<button type="submit" class="btn btn-primary w-100 py-2 fw-bold">

Find Adventure

</button>

</div>

</div>

</form>

</div>

</div>




<!-- FEATURES -->

<section class="py-5 bg-white">

<div class="container py-4">

<div class="row g-4 text-center">

<div class="col-md-4">

<div class="feature-box">

<div class="icon-circle">✈</div>

<h5 class="fw-bold mt-3">Easy Booking</h5>

<p class="text-muted small">

Seamlessly book your next adventure in minutes.

</p>

</div>

</div>



<div class="col-md-4">

<div class="feature-box">

<div class="icon-circle">💰</div>

<h5 class="fw-bold mt-3">Best Prices</h5>

<p class="text-muted small">

We guarantee the best value for your budget.

</p>

</div>

</div>



<div class="col-md-4">

<div class="feature-box">

<div class="icon-circle">🔒</div>

<h5 class="fw-bold mt-3">Secure Payment</h5>

<p class="text-muted small">

Your data is protected with industry-standard encryption.

</p>

</div>

</div>

</div>

</div>

</section>




<!-- PACKAGES -->

<section class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-4 px-2">

<h2 class="fw-bold m-0">Popular Packages</h2>

<a href="packages.php" class="text-primary text-decoration-none fw-semibold">

View All →

</a>

</div>


<div class="row g-4">

<?php

$sql = "SELECT * FROM packages LIMIT 3";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)):

?>

<div class="col-lg-4 col-md-6">

<div class="card h-100 package-card border-0 shadow-sm">

<div class="position-relative overflow-hidden rounded-top-4">

<img src="images/<?php echo $row['image']; ?>" class="card-img-top">

<div class="price-tag">₹<?php echo number_format($row['price']); ?></div>

</div>

<div class="card-body p-4 text-start">

<p class="text-primary small fw-bold mb-1">

📍 <?php echo $row['location']; ?>

</p>

<h5 class="card-title fw-bold text-dark">

<?php echo $row['title']; ?>

</h5>

<a href="package-details.php?id=<?php echo $row['id']; ?>"

class="btn btn-outline-primary w-100 mt-3 rounded-pill">

View Details

</a>

</div>

</div>

</div>

<?php endwhile; ?>

<?php } ?>

</div>

</section>




<!-- FOOTER -->

<footer class="bg-dark text-white pt-5 pb-4">

<div class="container text-center">

<h3 class="fw-bold mb-3">Wanderly</h3>

<p class="text-secondary small">

© 2026 Wanderly Travel Booking System

</p>

</div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>