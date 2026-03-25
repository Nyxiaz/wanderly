<!DOCTYPE html>
<html>

<head>
<title>Travel Booking</title>
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

<h2>Search Travel</h2>

<div class="search-box">

<input type="text" id="source" placeholder="From">

<input type="text" id="destination" placeholder="To">

<select id="type">
<option value="">Transport Type</option>
<option value="Bus">Bus</option>
<option value="Train">Train</option>
<option value="Flight">Flight</option>
</select>

<button onclick="searchTravel()">Search</button>

</div>

<div id="results"></div>

<script src="js/script.js"></script>

</body>
</html>