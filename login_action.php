<?php
include 'connection.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['email'];
    // echo $row;
    header("Location: index.php");
} else {
    $_SESSION['error'] = "Username or Password Incorrect";
    header("Location: login.php");
}

?>
