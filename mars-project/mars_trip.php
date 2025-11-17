<?php
// mars_trip.php
// This page calculates the time remaining until the next Mars trip
// and displays a countdown along with a PHP message.

// --------------------------
// Set the next Mars trip date
// --------------------------
// strtotime converts a human-readable date string into a Unix timestamp
$tripDate = strtotime("2025-12-01 09:00:00");

// --------------------------
// Get the current time
// --------------------------
// time() returns the current Unix timestamp
$now = time();

// --------------------------
// Calculate time difference
// --------------------------
// Difference in seconds between trip date and now
$secondsLeft = $tripDate - $now;

// Convert seconds to days (round up using ceil)
$daysLeft = ceil($secondsLeft / (60 * 60 * 24));

// --------------------------
// Set a PHP message based on days left
// --------------------------
// This demonstrates use of if/elseif/else control structures
if ($daysLeft < 7) {
    // Less than a week left
    $message = "The trip is almost here!";
} elseif ($daysLeft < 30) {
    // Less than a month left
    $message = "Get ready for launch!";
} else {
    // More than a month left
    $message = "Plenty of time to prepare.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Next Mars Trip</title>

    <!-- Link to external CSS for styling -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Include shared navigation menu -->
<?php include 'menu.php'; ?>

<!-- Main content container -->
<div class="container">
    <h1>Countdown to the Next Mars Trip</h1>

    <!-- Display PHP message based on days left -->
    <div class="message"><?php echo $message; ?></div>

    <!-- JavaScript countdown will update this element -->
    <div class="clock" id="clock">Loading time...</div>
</div>

<script>
// --------------------------
// JavaScript Countdown Clock
// --------------------------

// Function to update the countdown every minute
function updateClock() {
    // Set the trip date (same as in PHP)
    const tripDate = new Date("2025-12-01T09:00:00");

    // Get current date and time
    const now = new Date();

    // Calculate difference in milliseconds
    let diff = tripDate - now;

    // If the trip has already started
    if (diff <= 0) {
        document.getElementById('clock').innerText = "The Mars trip has started!";
        return;
    }

    // Calculate remaining days, hours, and minutes
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);

    // Update the clock element with formatted countdown
    document.getElementById('clock').innerText =
        days + " days, " + hours + " hours, " + minutes + " minutes until launch";
}

// Run once immediately when the page loads
updateClock();

// Set interval to update clock every 60,000 milliseconds (1 minute)
setInterval(updateClock, 60000);
</script>

</body>
</html>
