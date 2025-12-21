<!DOCTYPE html>
<html lang="en">
<head>
    <!-- character encoding for proper text display -->
    <meta charset="UTF-8">

    <!-- page title shown in browser tab -->
    <title>Trivia Game | Home</title>

    <!-- link to the shared external CSS file -->
    <link rel="stylesheet" href="style.css">

    <!-- lload jQuery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- load shared external JavaScript file -->
    <script src="js/script.js"></script>
</head>
<body>

<!-- page header containing site logo/title -->
<header>
    <h2>Trivia Game</h2>
</header>

<!-- nav menu shared across all pages -->
<nav>
    <a href="index.php">Home</a>
    <a href="game.php">Game</a>
    <a href="scores.php">Scores</a>
    <a href="about.php">About</a>
</nav>

<!-- main content container -->
<div class="container">
    <!-- main heading for the home page -->
    <h1>Welcome to Trivia Game!</h1>

    <!-- introductory text -->
    <p>
        Test your knowledge with fun trivia questions.
        Answer correctly to earn points and climb the leaderboard!
    </p>

    <!-- call to action -->
    <p>
        Click the button below to start playing.
    </p>

    <!-- button linking to the game page -->
    <a href="game.php">
        <button id="submitBtn">Start Game</button>
    </a>
</div>

<!-- footer shown on all pages -->
<footer>
    <p>© 2025 Trivia Game</p>
</footer>

</body>
</html>
