<!DOCTYPE html>
<html>
<head>
	<title>Student Details Form</title>
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
	<script src="js/validation.js"></script>
</head>
<body>
	<h1>Student Details Form</h1>
	<form method="post" action="submit.php" onsubmit="return validateForm()">
		<label for="name">Name (Legal/Official):</label>
		<input type="text" id="name" name="name" required pattern="[A-Za-z ]{3,}">
		<span id="nameError" class="error"></span>
		<br><br>
		<label for="matric">Matric No:</label>
		<input type="tel" id="matric" name=" matric" required pattern="[0-9]{7}">
        <!-- continue late and early for matric validation -->
		<span id="matricError" class="error"></span>
		<br><br>
        <label for="currentAddress">Current Address:</label>
		<textarea id="currentAddress" name="currentAddress"></textarea>
        <span id="currentAddressError" class="error"></span>
        <br><br>
        <label for="homeAddress">Home Address:</label>
		<textarea id="homeAddress" name="homeAddress"></textarea>
        <span id="homeAddressError" class="error"></span>
        <br><br>
		<label for="email">Email (Gmail Account):</label>
		<input type="email" id="email" name="email" pattern="[a-z0-9._]+@[a-z]+\.[a-z]{2,}$" required>
		<span id="emailError" class="error"></span>
		<br><br>
		<label for="Mphone">Mobile Phone No:</label>
		<input type="tel" id="Mphone" name="Mphone" required pattern="[0-9]{10}">
		<span id="MphoneError" class="error"></span>
        <br><br>
		<label for="Hphone">Home Phone No (Emergency):</label>
		<input type="tel" id="Hphone" name="Hphone" required pattern="[0-9]{10}">
		<span id="HphoneError" class="error"></span>
		<!-- <br><br>
		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" required>
		<span id="dobError" class="error"></span>
		<br><br>
		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male" required>Male
		<input type="radio" id="female" name="gender" value="female" required>Female
		<input type="radio" id="other" name="gender" value="other" required>Other
		<span id="genderError" class="error"></span> -->
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
