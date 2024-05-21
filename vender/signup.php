
<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm){

    $query = $connect->prepare("SELECT * FROM `users` WHERE `login` = ?");
    $query->execute([$login]);

    if ( $query->rowCount() > 0) {
        $_SESSION['massage'] = 'Логин занят!!!';
        header('Location: ../register.php');
        exit();
    }

//    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
//    if(mysqli_num_rows($check_login) > 0) {
//        $_SESSION['massage'] = 'Логин занят!!!';
//        header('Location: ../register.php');
//        exit();
//    }


    if(isset($_FILES['avatar'])){
        $path = 'uploads/' .time() .$_FILES['avatar']['name'];
        if ( !move_uploaded_file($_FILES['avatar']['tmp_name'], '../' .$path) ) {
            $_SESSION['massage'] = 'Ошибка загрузки изображения!!!';
            header('Location: ../register.php');
            exit();
        }
    }

    $password = md5($password);
    $query = $connect->prepare("INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, ?, ?, ?, ?, ?)");
    $query->execute([$full_name, $login, $email, $password, $path]);
        $_SESSION['massage'] = 'Регистрация прошла успешно!!!';
    header('Location: ../index.php');
} else {
    $_SESSION['massage'] = 'Пароли не совпадают!!!';
    header('Location: ../register.php');

//    $sql = "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')";
//    mysqli_query($connect, $sql);
//    $_SESSION['massage'] = 'Регистрация прошла успешно!!!';
//    header('Location: ../index.php');
//} else {
//    $_SESSION['massage'] = 'Пароли не совпадают!!!';
//    header('Location: ../register.php');
}

