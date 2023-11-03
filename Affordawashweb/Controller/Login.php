<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'elmar'&& $password == 'waniwan'){
        header('Location: ../manager_view.php');
    }
    else {
        header('Location: ../login.php');
    }
    exit;
}
