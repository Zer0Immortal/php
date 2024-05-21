<?php
require_once 'connect.php';
$data = $connect->query('SELECT * FROM forum')->fetchAll();
//$Str = "</table>";
//foreach ($data as $row) {
//    $Str .= "<tr> <td>{$row['id']}</td><td>{$row['full_name']}</td><td>{$row['massage']}</td> </tr>";
//}
//$Str .= "</table>";
//print_r($data);
echo json_encode($data);



