<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

require_once 'vender/connect.php';
$data = $connect->query("SELECT * FROM forum WHERE id = {$_GET['id']}")->fetch();
if($data['login'] != $_SESSION['user']['login']) {
    $_SESSION['massage'] = "Вы не писали это сообщение!";
    header('Location: forum.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Форум</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        div {
            width: 400px;
            border: black solid 1px;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        textarea {
            margin: 0px;
            padding: 0px;
            width: 368px;
            height: 300px;
            resize: none;
        }
        fieldset {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: black solid 1px;
            margin: 0px;
        }
        .logout {
            width: 50px;
            padding: 5px;
            border: black solid 1px;
            border-radius: 10px;
            color: black;
            display: flex;
            justify-content: center;
            font-size: 15px;
            text-decoration: none;
        }


    </style>
</head>
<body>

<div>
    <form id="form" action="vender/redact.php" method="post">
        <fieldset>
            <legend>Редактирование</legend>
            <textarea maxlength="1000" id="massage" name="massage" placeholder="Введите сообщение..." required><?php echo $data['massage']; ?></textarea>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" value="Сохранить">
            <p></p>
            <a href="forum.php" class="logout">Назад</a>
        </fieldset>
    </form>
</div


</body>
</html>
