<?php

session_start();

if (empty($_SESSION['autentification'])) {
    header('Location: /index.php');
    die;
}