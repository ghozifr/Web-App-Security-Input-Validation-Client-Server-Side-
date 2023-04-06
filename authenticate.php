<?php
session_start();
require_once('db.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Retrieve user information from database
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	// Check if user exists and password matches
	if(mysqli_num_rows($result) == 1 && password_verify($password, $row['password'])){
		// Save user email in session
		$_SESSION['email'] = $email;

		// Redirect to student details page
		header("Location: student_details.php");
		exit();
	} else{
		echo "Invalid email or password. <br>";
	}
}

mysqli_close($conn);
?>
