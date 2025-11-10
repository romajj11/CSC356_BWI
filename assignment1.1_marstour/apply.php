<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pilot Application - Red Horizon</title>
  <!-- Link to CSS file for styling -->
  <link rel="stylesheet" href="style.css">
  <!-- Link to JavaScript file for form validation -->
  <script src="script.js" defer></script>
</head>
<body>
  <!-- Header with page title and navigation -->
  <header>
    <h1>Apply to Be a Mars Pilot</h1>
    <nav>
      <a href="index.php">Home</a> |
      <a href="apply.php">Application</a>
    </nav>
  </header>

  <main>
    <!-- Pilot application form -->
    <form id="pilotForm" action="submit.php" method="post">
      <!-- Full Name input -->
      <label for="name">Full Name:</label><br>
      <input type="text" id="name" name="name" required><br><br>

      <!-- Age input with min/max restrictions -->
      <label for="age">Age:</label><br>
      <input type="number" id="age" name="age" min="21" max="65" required><br><br>

      <!-- Flight hours input -->
      <label for="hours">Total Flight Hours:</label><br>
      <input type="number" id="hours" name="hours" required><br><br>

      <!-- Favorite Planet input -->
      <label for="planet">Favorite Planet:</label><br>
      <input type="text" id="planet" name="planet" required><br><br>

      <!-- Reason for applying (textarea) -->
      <label for="reason">Why do you want to fly to Mars?</label><br>
      <textarea id="reason" name="reason" rows="4" cols="40" required></textarea><br><br>

      <!-- Submit button -->
      <input type="submit" value="Submit Application">
    </form>
  </main>

 
</body>
</html>
