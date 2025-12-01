<?php
// Start the session
session_start();

// Include database connection
include 'db.php';

// If the form was submitted:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Query database
    $sql = "SELECT * FROM users WHERE userid='$userid' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // If user exists
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['loggedin'] = true;
        header("Location: intranet.php");
        exit();
    } else {
        $error = "Invalid userid or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mars Tourism Login</title>

    <script>
        // JavaScript validation
        function validateForm() {
            let userid = document.forms["loginForm"]["userid"].value;
            let password = document.forms["loginForm"]["password"].value;

            if (userid == "" || password == "") {
                alert("Please enter both userid and password.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<h2>Mars Employee Login</h2>

<!-- Display error if exists -->
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form name="loginForm" method="POST" onsubmit="return validateForm()">
    <label>UserID:</label>
    <input type="text" name="userid"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
