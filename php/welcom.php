<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<body>
    <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
