<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

require_once 'connect.php';
$data = $connect->query("SELECT * FROM forum WHERE id = {$_GET['id']}")->fetch();
if($data[1] != $_SESSION['user']['full_name']) {
    $_SESSION['massage'] = "Вы не писали это сообщение!";
}
else{
    $query = $connect->prepare('DELETE FROM `forum` WHERE `id` = ?');
    $query->execute([$_GET['id']]);
}
header('Location: ../forum.php');