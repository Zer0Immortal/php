<?php
session_start();

require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_users = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = mysqli_fetch_assoc($check_users);
if ( mysqli_num_rows($check_users) > 0) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'full_name' => $user['full_name'],
        'login' => $user['login'],
        'email' => $user['email'],
        'avatar' => $user['avatar']
    ];
    header('Location: ../profile.php');
} else {
    $_SESSION['massage'] = 'Неверный Логин или Пароль!!!';
    header('Location: ../index.php');
}
