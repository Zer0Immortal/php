<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
if($_SESSION['user']['id'] == 1){
    header('Location: admin.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
</head>
<body>
<form>
    <img src="<?php
    if(empty($_SESSION['user']['avatar'])){
        echo 'uploads/Без имени.png';
    } else {echo $_SESSION['user']['avatar'];}
    ?>" width="200px" alt="Нет аватара">
    <h1 style="margin: 10px"><?= $_SESSION['user']['full_name'] ?></h1>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vender/logout.php" class="logout">Выход</a>
</form>
</body>
</html>
