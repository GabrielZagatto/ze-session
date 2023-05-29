<?php
$host = '127.0.0.1';
$username = 'root';
$password = "";
$dbname = 'session_projeto';
$email = $_POST['email'];
$user_password = md5($_POST['password']);

$connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$verificacao = "SELECT email FROM users";
$teste = $connect -> prepare($verificacao);
$teste -> execute();
$return = $teste -> fetchAll();

foreach($return as $emailBanco){
    $exist = $emailBanco['email'];
    if($email == $exist){
        header('Location: /cadastros.php');
        die;
    }
}

$query = "INSERT INTO users (email, password) VALUES (:email, :password)";
$teste = $connect -> prepare($query);

$teste -> bindParam(':email', $email);
$teste -> bindParam(':password', $user_password);

$teste -> execute();

$connect = null;

header('Location: /index.php');