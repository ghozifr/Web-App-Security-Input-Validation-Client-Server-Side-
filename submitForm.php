<!DOCTYPE html>
<html>
<head>
	<title>My Form Submission Result</title>
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $date = htmlspecialchars($_POST['date']);
        $time = htmlspecialchars($_POST['time']);
        $guests = htmlspecialchars($_POST['guests']);
        $comments = htmlspecialchars($_POST['comments']);
		echo "<h1>Form Submission Result:</h1>";
		echo "<p>Name: $name</p>";
		echo "<p>Email: $email</p>";
		echo "<p>Phone Number: $phone</p>";
        echo "<p>Date: $date</p>";
		echo "<p>Time: $time</p>";
		echo "<p>Number of Guests: $guests</p>";
		echo "<p>Comments: $comments</p>";
	}
	?>
</body>
</html>
