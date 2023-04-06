<?php
require_once('db.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Hash password for security
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Insert user information into database
	$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
	if(mysqli_query($conn, $sql)){
		echo "Registration successful. <br>";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>
