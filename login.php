<?php
session_start();

// Dummy credentials for demonstration purposes
$valid_username = 'Snekii77';
$valid_password = 'imnotsean00';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $_SESSION['error'] = 'Invalid username or password';
        header("Location: index.php");
        exit();
    }
}
?>
