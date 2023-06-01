<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
</head>
<body>
	<h2>Registration Form</h2>
	<form action="register.php" method="POST">
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>
