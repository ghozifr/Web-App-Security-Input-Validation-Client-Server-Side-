<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h2>Login Page</h2>
	<form action="authenticate.php" method="POST">
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
