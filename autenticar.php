<?php
$host = '127.0.0.1';
$username = 'root';
$dbname = 'session_projeto';
$password = md5($_POST['password']);  
$email = $_POST['email'];

session_start();

$connect = new PDO("mysql:host=$host;dbname=$dbname", $username, '');
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$verification = "SELECT email, password FROM users WHERE email = '$email'";
$test = $connect -> prepare($verification);
$test -> execute();
$return = $test -> fetchAll();

$existEmail = $return[0]['email'];
$existPassword = $return[0]['password'];
if($email == $existEmail && $password == $existPassword){
    $_SESSION['autentification'] = $email;
    header('Location: /cadastros.php');
    die;
}
header('Location: /index.php');
$connect = null;