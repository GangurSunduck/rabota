<?php
session_start();
$id=$_SESSION['id'];
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
        nav(3);
    ?>
    <main>
        <center><h1 class="green">Личный кабинет</h1></center>
        <div >
            <?php
                include 'php/db.php';
                $id=$_SESSION['id'];
                $query="select `surname`,`name`,`patronymic`,`phone` from `user` where `user_id`='$id'";
                $result=$link->query($query);
                while($row=$result->fetch_assoc()){
                $surname=$row['surname'];
                $name=$row['name'];
                $patronymic=$row['patronymic'];
                $phone=$row['phone'];
                echo "
                <p class='green'>Фамилия: $surname</p>
                <p class='green'>Имя: $name</p>
                <p class='green'>Отчество: $patronymic</p>
                <p class='green'>Телефон: $phone</p>
                ";
                }
                
            ?>
        </div>
        <div class="zayavk">
            <?php
                $query="SELECT * from `application` where `user_id`='$id'";
                $result=$link->query($query);
                $i=0;
                while($row=$result->fetch_assoc()){
                    $nomer=$row['number'];
                    $status=$row['status'];
                    $gosnom=$row['number_car'];
                    $message=$row['message'];
                    $i++;
                    echo "<div class='zayavka'><h3>Нарушение №$nomer</h3>
                    <h5>Статус: $status</h5>
                    <h5>Гос номер автомобиля: $gosnom</h5>
                    <p>$message</p></div>
                    ";
                }
            ?>
        </div>
        <center><button><a href='application.php'>Подать заявление</a></button></center>
    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>

</html>