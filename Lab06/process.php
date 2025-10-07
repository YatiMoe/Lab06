<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

// Replace with your actual info
$correct_username = "YourName";
$correct_password = "YourStudentID";

if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    echo "<script>alert('Invalid login! Try again.'); window.location='login.php';</script>";
}
?>
