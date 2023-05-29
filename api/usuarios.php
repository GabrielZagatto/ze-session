<?php
require '../functions.php';

$sql = "SELECT id, email FROM users";

$users = query($sql);

echo json_encode($users);