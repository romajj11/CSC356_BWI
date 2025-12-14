<?php
$questionNumber = 1;
$totalQuestions = 10;
$questionText = "What is the capital of France?";
$answers = ["Paris", "Rome", "Berlin", "Madrid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trivia Game</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- External JS -->
    <script src="script.js"></script>
</head>
<body>

<header>
    <h2>Logo Placeholder</h2>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="game.php">Game</a>
    <a href="scores.php">Scores</a>
    <a href="about.php">About</a>
</nav>

<div class="container">
    <div class="question-number">
        Question <?php echo $questionNumber; ?> of <?php echo $totalQuestions; ?>
    </div>

    <div class="question-text">
        <?php echo $questionText; ?>
    </div>

    <?php foreach ($answers as $ans): ?>
        <div class="answer" data-answer="<?php echo $ans; ?>">
            <?php echo $ans; ?>
        </div>
    <?php endforeach; ?>

    <button id="submitBtn">Submit Answer</button>

    <div class="score-box">
        Score: <span id="scoreValue">0</span>
    </div>
</div>

<footer>
    <p>Footer Placeholder</p>
</footer>

</body>
</html>
