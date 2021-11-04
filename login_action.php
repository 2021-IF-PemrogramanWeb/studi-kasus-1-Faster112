<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "tauchid@gmail.com") {
    header('Location: index.php');
} else {
    header('Location: relogin.html');
}

?>