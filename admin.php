<?php
session_start();
if($_SESSION['user']['id'] != 1){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админская страница</title>
</head>
<body>
    <?php
    require_once 'vender/connect.php';
    $check_users = mysqli_query($connect, "SELECT * FROM `users`");
    $user = mysqli_fetch_all($check_users);
    foreach ($user as $value){
        echo '<br>';
        foreach ($value as $key => $item){
            echo $item.' | ';
        }
        echo '<br>';
    }
    ?>
    <a href="vender/logout.php" class="logout">Выход</a>
</body>
</html>
