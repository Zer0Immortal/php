<?php
session_start();
require_once 'connect.php';

$query = $connect->prepare('UPDATE `forum` SET `massage` = ? WHERE `forum`.`id` = ?');
$query->execute([$_POST['massage'], $_POST['id']]);

header('Location: ../forum.php');