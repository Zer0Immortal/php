<?php
//$connect = mysqli_connect('test', 'root', '','test');
//if (!$connect) {
//    die('Error connect to DB!!!');
//}
try {
    $connect = new PDO('mysql:host=localhost;dbname=test','root','');
}
catch (PDOException $e) {
    die('Ошибка подключения БД!!!'. $e->getMessage());
}
