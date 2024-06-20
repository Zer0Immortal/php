<?php
session_start();
require_once 'connect.php';

$data = $connect->query('SELECT * FROM forum')->fetchAll();

for ($i = 0; $i < count($data); $i++) {
    if(!isset($_SESSION['user'])){
        $data[$i][3] = false;
        continue;
    }
    if($data[$i]['full_name'] == $_SESSION['user']['full_name']){
        $data[$i][3] = true;
    }
    else $data[$i][3] = false;
}

echo json_encode($data);



