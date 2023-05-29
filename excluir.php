<?php
require "verificar-logado.php";
require "functions.php";

$id = $_POST['id'];
$sql = "DELETE FROM users WHERE id = '$id'";
query($sql);




header('Location: /cadastros.php');
