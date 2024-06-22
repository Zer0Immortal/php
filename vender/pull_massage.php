<?php
session_start();
require_once 'connect.php';

$data = $connect->query('SELECT * FROM forum')->fetchAll();

for ($i = 0; $i < count($data); $i++) {
    if(!isset($_SESSION['user'])){
        $data[$i][3] = false;
        continue;
    }
    if($data[$i]['login'] == $_SESSION['user']['login']){
        $data[$i][3] = true;
    }
    else $data[$i][3] = false;
    unset($data[$i][1]);
}

echo json_encode($data);



