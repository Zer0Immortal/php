<?php session_start();
    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
<form action="vender/signup.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <label>ФИО<input type="text" name="full_name" placeholder="Введите полное имя"></label>
        <label>Логин<input type="text" name="login" placeholder="Введите свой логин"></label>
        <label>Почта<input type="email" name="email" placeholder="Введите свою почту"></label>
        <label>Аватар<input type="file" name="avatar"></label>
        <label>Пороль<input type="password" name="password" placeholder="Введите свой пароль"></label>
        <label>Подтвердите пороль:<input type="password" name="password_confirm" placeholder="Подтвердите свой пароль"></label>
        <input class="sub" type="submit" value="Отправить">
        <p>
            У вас уже есть аккаунта? - <a href="index.php">Авторизуйтесь!</a>
        </p>
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

