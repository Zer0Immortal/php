<?php
$connect = mysqli_connect('test', 'root', '','test');
if (!$connect) {
    die('Error connect to DB!!!');
}