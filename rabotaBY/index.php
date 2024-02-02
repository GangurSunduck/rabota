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

<body class="body">
    <?php
    include 'php/nav.php';
        nav(3);
    ?>
    <main>
        <center class="g">
            <h1> Нарушениям.Нет</h1>
            <p>Наш портал представляет собой информационную систему для помощи 
                полиции по своевременной фиксации нарушений правил дорожного 
                движения.</p>
                <?php
                if(!isset($_SESSION['id'])){
                echo "<button id='but'><a href='login.php' id='but'>Подать заявление</a></button>";
                }else{
                    echo "<button ><a href='application.php' id='but'>Подать заявление</a></button>";
                }  
                ?>
                <h2>Будь ответственным гражданином!</h2>
        </center>
    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>

</html>