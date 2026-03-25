<!DOCTYPE html>
<html>

<head>
<title>Payment</title>
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

<h2>Payment</h2>

<p>Select Payment Method</p>

<form action="payment-success.php" method="POST">

<input type="radio" name="method" required> UPI<br><br>

<input type="radio" name="method"> Credit / Debit Card<br><br>

<input type="radio" name="method"> Net Banking<br><br>

<button type="submit" class="package-btn">Pay Now</button>

</form>

</div>

</body>
</html>