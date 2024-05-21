<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
require_once 'connect.php';
if(!empty($_POST['massage'])) {

    $messege = $_POST['massage'];

    $query = $connect->prepare('INSERT INTO `forum` (`id`, `full_name`, `massage`) VALUES (NULL, ?, ?)');
    $query->execute([$_SESSION['user']['full_name'], $messege]);
} else {
    $_SESSION['massage'] = 'Сообщение отсутствует!!!';
}
header('Location: ../forum.php');
