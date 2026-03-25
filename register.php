<?php
include "php/db.php";
?>

<!DOCTYPE html>
<html>

<head>
<title>Register - Wanderly</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
<h1>Wanderly</h1>
</header>

<div class="container">

<h2>Create Account</h2>

<form action="register-process.php" method="POST">

<label>Name</label><br>
<input type="text" name="name" required><br><br>

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<button class="package-btn">Register</button>

</form>

<p>Already have an account? <a href="login.php">Login</a></p>

</div>

</body>
</html>