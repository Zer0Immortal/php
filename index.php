<?php session_start();
    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Главная</title>
</head>
<body>
<form action="vender/signin.php" method="post">
    <fieldset>
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пороль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <input class="sub" type="submit">
        <p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a>
        </p>
        <a class="for" href="forum.php">Форум</a>
        <p class="massage">
            <?php
            if ( isset($_SESSION['massage']) ){
                echo $_SESSION['massage'];
                unset($_SESSION['massage']);
            }
            ?>
        </p>
    </fieldset>
</form>
</body>
</html>
