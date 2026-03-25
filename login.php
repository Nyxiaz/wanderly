<!DOCTYPE html>
<html>

<head>
<title>Login - Wanderly</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
<h1>Wanderly</h1>
</header>

<div class="container">

<h2>Login</h2>

<form action="login-process.php" method="POST">

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<button class="package-btn">Login</button>

</form>

<p>No account? <a href="register.php">Register</a></p>

</div>

</body>
</html>