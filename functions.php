<?php

function dd($data) {
    echo "<pre>";
    var_dump($data);
    die;
}

function query($sql){
$host = '127.0.0.1';
$username = 'root';
$password = "";
$dbname = 'session_projeto';

$connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connect->prepare($sql);
$stmt->execute();
return $stmt->fetchAll();
}