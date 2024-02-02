<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include 'php/nav.php';
    nav(2);
    ?>
    <main>
        <center>
            <h1 class="green">Регистрация</h1>
        </center>
        
        <form action="php/regaction.php" method="post" class="login">
        <?php
                if(isset($_GET['error'])){
                    $error=$_GET['error'];
                    echo "
                        <div class='error1'>
                            <p class='error1'>$error</p>
                        </div>
                    ";
                }
            ?>
            <label for="">Фамилия</label>
            <input type="text" name="surname">
            <label for="">Имя</label>
            <input type="text" name="name">
            <label for="">Отчество</label>
            <input type="text" name="patronymic">
            <label for="">Логин</label>
            <input type="text" name="login">
            <label for="">Адрес эл. почты</label>
            <input type="email" name="email">
            <label for="">Телефон</label>
            <input type="tel" name="phone">
            <label for="">Пароль</label>
            <input type="password" name="password">
            <label for="">Повторите пароль</label>
            <input type="password" name="password-repeat">
            <button>Зарегистрироваться</button>
        </form>

    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>

</html>