<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Received</title>
  <!-- Link to CSS for styling -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header with navigation -->
  <header>
    <h1>Application Received!</h1>
    <nav>
      <a href="index.php">Home</a> |
      <a href="apply.php">Back to Application</a>
    </nav>
  </header>

  <main>
    <!-- Thank you message including applicant's name -->
    <p>Thank you, <strong><?php echo htmlspecialchars($_POST["name"]); ?></strong>!</p>
    <p>Your application has been received successfully.</p>

    <!-- Display applicant's submitted information -->
    <h3>Application Summary:</h3>
    <ul>
      <li><strong>Age:</strong> <?php echo htmlspecialchars($_POST["age"]); ?></li>
      <li><strong>Total Flight Hours:</strong> <?php echo htmlspecialchars($_POST["hours"]); ?></li>
      <li><strong>Favorite Planet:</strong> <?php echo htmlspecialchars($_POST["planet"]); ?></li>
      <li><strong>Reason for Applying:</strong> <?php echo htmlspecialchars($_POST["reason"]); ?></li>
    </ul>

    <!-- Return to Home button -->
    <a class="button" href="index.php">Return to Home</a>
  </main>

</body>
</html>
