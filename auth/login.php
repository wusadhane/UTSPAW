<?php

if (!isset($_POST['submitted']))
    header('Location: ' . $_SERVER['HTTP_REFERER']);

$credentials = [
    'username' => 'admin',
    'password' => 'admin'
];

if ($credentials['username'] !== $_POST['username'] or $credentials['password'] !== $_POST['password']) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

header('Location:' . '../home.php');

exit();
