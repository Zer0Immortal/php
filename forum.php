<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
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
        table {
            height: 400px;
            border: black solid 1px;
            border-collapse: inherit;
            display: flex;
            flex-direction: column;
            /*align-content: space-between;*/
            justify-content: flex-start;
        }
        tr {
            display: flex;
            justify-content: center;
            width: 400px;
            border-bottom: black solid 1px;
            border-top: black solid 1px;
        }
        td.c1 {
            width: 20px;
            display: flex;
            justify-content: center;
        }
        td.c2 {
            width: 100px;
        }
        td.c3 {
            width: 278px;
            padding-right: 5px;
        }
        textarea {
            margin: 0px;
            padding: 0px;
            width: 368px;
            resize: none;
        }
        fieldset {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: black solid 1px;
            margin: 0px;
        }
        a {
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

<script>
    massage();
    function massage() {
        $.ajax({
            url: '/vender/pull_massage.php',
            method: 'GET',
            dataType: 'json',
            data: null,
            success: function (data) {
                console.log(data.length);
                if(stroke < data.length) {
                    for (let i = stroke; i < data.length;i++) {
                        let Str ='<tr><td class="c1">' + data[i][0] + '</td>  <td class="c2">' + data[i][1] + '</td>  <td class="c3">' + data[i][2] + '</td></tr>';
                        document.getElementById('allmassage').innerHTML += Str;
                    }
                    stroke = data.length;
                }
            }
        });
    }
        let stroke = 0;
        setInterval(massage, 1000);

</script>
<div>
    <table id="allmassage">
        <caption>Чат</caption>

    </table>

<form id="form" action="vender/push_massage.php" method="post" onsubmit="return false">
    <fieldset>
        <textarea maxlength="1000" id="massage" name="massage" placeholder="Введите сообщение..." required></textarea>
        <input type="submit" value="Отправить">
        <p><?php if ( isset($_SESSION['massage']) ){
                echo $_SESSION['massage'];
                unset($_SESSION['massage']);

            } ?></p>
        <a href="profile.php" class="logout">Назад</a>
    </fieldset>
</form>
</div>
<script>

    $("document").ready(function () {
        $('#form').on("submit", function (){

            let dataForm = $(this).serialize()

            $.ajax({
               url: '/vender/push_massage.php',
                method: 'POST',
                dataType: 'html',
                data: dataForm,
                success: function (data) {
                    console.log(data);
                }
            });

            document.getElementById('massage').value = '';
        })
        
    })



</script>


</body>
</html>


