<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

if (empty($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

$_SESSION['usuarios'][] = [
    'email' => $email,
    'password' => md5($password)
];

header('Location: /cadastros.php');