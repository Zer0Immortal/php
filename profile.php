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
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        div {
            width: 400px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            border: black solid 2px;
            border-radius: 20px;
            padding: 10px;
            text-align: center;
        }
        img {
            /*width: 200px;*/
            padding: 30px 70px;
            border-bottom: black 1px solid;
        }
        a {
            text-decoration: none;
        }
        #em {
            padding-bottom: 10px;
            border-bottom: black 1px solid;
        }
        a.logout {
            color: darkblue;
            padding: 5px;
            font-size: 20px;
        }
        a.logout:hover {
            color: black;
        }
    </style>
</head>
<body>
<form>
    <div>
    <img src="<?php
    if(empty($_SESSION['user']['avatar'])){
        echo 'uploads/Без имени.png';
    } else {echo $_SESSION['user']['avatar'];}
    ?>" alt="Нет аватара">
    <h1 style="margin: 10px"><?= $_SESSION['user']['full_name'] ?></h1>

    <a id="em" href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="forum.php" class="logout">Форум</a>
    <a href="vender/logout.php" class="logout">Выход</a>
    </div>
</form>
</body>
</html>
