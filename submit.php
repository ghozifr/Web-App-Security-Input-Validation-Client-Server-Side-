<?php

$name = $_POST['name'];
$matric = $_POST['matric'];
$currentAddress = $_POST['currentAddress'];
$homeAddress = $_POST['homeAddress'];
$email = $_POST['email'];
$Mphone = $_POST['Mphone'];
$Hphone = $_POST['Hphone'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];

$nameRegex = '/^[A-Za-z ]{3,}$/';
$matricRegex = '/^[0-9]{7}$/';
$emailRegex = '/^[a-z0-9._]+@[gmail]+\.[com]{2,}$/';
$phoneRegex = '/^[0-9]{10}$/';

$errors = array();

if (!preg_match($nameRegex, $name)) {
    $errors[] = "Please enter a valid name (at least 3 characters long and contains only alphabets and spaces)";
}

if (!preg_match($matricRegex, $matric)) {
    $errors[] = "Please enter a valid matric number (7 digits)";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currentAddress = htmlspecialchars($_POST['currentAddress']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $homeAddress = htmlspecialchars($_POST['homeAddress']);
}

if (!preg_match($emailRegex, $email)) {
    $errors[] = "Please enter a valid email";
}

if (!preg_match($phoneRegex, $Mphone)) {
    $errors[] = "Please enter a valid phone number (10 digits)";
}

if (!preg_match($phoneRegex, $Hphone)) {
    $errors[] = "Please enter a valid phone number (10 digits)";
}

if (count($errors) > 0) {
    // Display errors if any
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    // Display the submitted form data
    echo "<h2>Student Details:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Matric:</strong> $matric</p>";
    echo "<p><strong>Current Address:</strong> $currentAddress</p>";
    echo "<p><strong>Home Address::</strong> $homeAddress</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile Phone No:</strong> $Mphone</p>";
    echo "<p><strong>Home Phone No (Emergency)::</strong> $Hphone</p>";
    // echo "<p><strong>Date of Birth:</strong> $dob</p>";
    // echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<button onclick=\"window.location.href='studentDetails.php'\">back</button>";

}

?>
