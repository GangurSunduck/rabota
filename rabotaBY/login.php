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
        nav(1);
    ?>
    <main>
        <center>
            <h1 class="green">Вход</h1></center>
            
            <form action="php/loginaction.php" method="post" class="login">
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
            
                <label for="">Ваш логин</label>
                <input type="text" name="login">
                <label for="">Ваш пароль</label>
                <input type="password" name="password">
                <button>Войти</button>
            </form>
        
    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>
</html>