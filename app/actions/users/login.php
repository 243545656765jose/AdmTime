<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/models/users.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $result = authenticate($_POST['username'], $_POST['password']);
    if ($result) {
        session_start();
        $_SESSION['user'] = $result;
        header('Location: /ADMPersonal/app/pages/menu.php');
    } else {
        header('Location: /ADMPersonal/app/pages/login.php?error=invalid_credentials');
    }
} else {
    header('Location: /ADMPersonal/app/pages/login.php?error=missing_fields');
}

