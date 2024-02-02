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
        nav(5);
        
    ?>
    <main>
        <center>
            <h1 class="green">Подача заявления</h1></center>
            <form action="php/appli.php" method="post" class="login">
                <label for="">Государственный регистрационный номер автомобиля</label>
                <input type="text" name="numberCar">
                <label for="">Описание нарушения</label>
                <input type="text" name="message">
                <button>Подать заявление</button>
            </form>
        
    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>
</html>