<?php
session_start();

$users = [
    'user@gmail.com' => 'password@123',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($users[$email]) && $users[$email] == $password) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $message = "<p style='color:red'>Invalid email or password. Please try again </p>";
        header("Location: index.php");
        exit;
    }
}
