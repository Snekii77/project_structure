<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>I'm Back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Surprise! Surprise! The King is Back!</p>
    <a href="logout.php">Logout</a>

    </div>
</body>
</html>
