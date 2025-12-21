<?php
// Temporary score data (will be replaced by MySQL later)
$scores = [
    ["rank" => 1, "name" => "Alex", "score" => 9],
    ["rank" => 2, "name" => "Jordan", "score" => 7],
    ["rank" => 3, "name" => "Taylor", "score" => 5]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trivia Game | High Scores</title>

    <!-- Shared CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jQuery and shared JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Small page-specific styling for table -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background: #1976d2;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h2>Trivia Game</h2>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="game.php">Game</a>
    <a href="scores.php">Scores</a>
    <a href="about.php">About</a>
</nav>

<div class="container">
    <h1>High Scores</h1>

    <!-- Table displaying scores -->
    <table>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
        </tr>

        <!-- Loop through score array and print rows -->
        <?php foreach ($scores as $row): ?>
        <tr>
            <td><?php echo $row["rank"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["score"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<footer>
    <p>© 2025 Trivia Game</p>
</footer>

</body>
</html>
