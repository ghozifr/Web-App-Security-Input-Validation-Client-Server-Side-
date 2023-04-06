<?php

// Define database connection constants
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'studentregister');

// Establish database connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check for errors in connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// DB_CONNECTION=mysql
// DB_HOST=127.0.0.1
// DB_PORT=8889
// DB_DATABASE=myFolio
// DB_USERNAME=root
// DB_PASSWORD="root"