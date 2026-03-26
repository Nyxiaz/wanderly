<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Travel Booking | Wanderly</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg sticky-top">

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

<?php if(isset($_SESSION['user_id'])){ ?>

<li class="nav-item">
<a class="nav-link" href="profile.php">Profile</a>
</li>

<li class="nav-item">
<a class="nav-link" href="logout.php">Logout</a>
</li>

<?php } else { ?>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link btn btn-primary text-white ms-lg-3 px-3" href="register.php">Register</a>
</li>

<?php } ?>

</ul>

</div>

</div>

</nav>



<!-- PAGE HEADER -->

<section class="text-center py-5" style="background:#fff3ec">

<div class="container">

<h1 class="fw-bold mb-2">Book Your Travel</h1>

<p class="text-muted">Flights, Bus and Train booking in one place</p>

</div>

</section>



<!-- BOOKING SECTION -->

<div class="container py-5">


<!-- TABS -->

<ul class="nav nav-pills justify-content-center mb-4" id="travelTabs">

<li class="nav-item">
<button class="nav-link active px-4" data-bs-toggle="tab" data-bs-target="#flight">Flights</button>
</li>

<li class="nav-item">
<button class="nav-link px-4" data-bs-toggle="tab" data-bs-target="#bus">Bus</button>
</li>

<li class="nav-item">
<button class="nav-link px-4" data-bs-toggle="tab" data-bs-target="#train">Train</button>
</li>

</ul>



<div class="tab-content">


<!-- FLIGHT -->

<div class="tab-pane fade show active" id="flight">

<div class="card p-4 shadow-sm border-0 rounded-4">

<div class="row g-3 justify-content-center">

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="From">
</div>

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="To">
</div>

<div class="col-md-2">
<input type="date" class="form-control rounded-pill">
</div>

<div class="col-md-2">
<input type="number" class="form-control rounded-pill" placeholder="Passengers">
</div>

<div class="col-md-2">
<button class="btn btn-primary w-100 rounded-pill">Search</button>
</div>

</div>

</div>

</div>



<!-- BUS -->

<div class="tab-pane fade" id="bus">

<div class="card p-4 shadow-sm border-0 rounded-4">

<div class="row g-3 justify-content-center">

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="From">
</div>

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="To">
</div>

<div class="col-md-3">
<input type="date" class="form-control rounded-pill">
</div>

<div class="col-md-2">
<button class="btn btn-primary w-100 rounded-pill">Search</button>
</div>

</div>

</div>

</div>



<!-- TRAIN -->

<div class="tab-pane fade" id="train">

<div class="card p-4 shadow-sm border-0 rounded-4">

<div class="row g-3 justify-content-center">

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="From">
</div>

<div class="col-md-3">
<input type="text" class="form-control rounded-pill" placeholder="To">
</div>

<div class="col-md-3">
<input type="date" class="form-control rounded-pill">
</div>

<div class="col-md-2">
<button class="btn btn-primary w-100 rounded-pill">Search</button>
</div>

</div>

</div>

</div>


</div>

</div>



<!-- FOOTER -->

<footer class="text-center p-4 mt-5">

<p>© 2026 Wanderly Travel Booking System</p>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>