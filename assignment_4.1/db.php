<?php
// db.php - Database connection file
$host = "localhost";
$user = "root";
$pass = "Alex11Emma!";
$dbname = "mars_tourism";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
