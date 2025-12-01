<?php
// Start session
session_start();

// Redirect if not logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Mars Employee Intranet</title>
</head>
<body>

<h1>Welcome to the Mars Tourism Employee Intranet</h1>

<p>🚀 Number of tourists booked for the next flight: <strong>42</strong></p>

<p><a href="#">Download HR Liability Form</a></p>
<p><a href="#">Spaceship Borrowing Policy</a></p>

<a href="logout.php">Logout</a>

</body>
</html>
