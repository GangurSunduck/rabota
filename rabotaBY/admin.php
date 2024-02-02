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
    nav(4);
    ?>
    <main>
        
        <div class="zayavk">
            <?php
            include 'db.php';
            $query = "SELECT * from `car`";
            $result = $link->query($query);
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $nomer = $row['nomer'];
                $status = $row['status'];
                $gos = $row['gos'];
                $opisanie = $row['message'];
                if($status=='Новая'){
                echo "<div class='zayavka'><h3>Нарушение №$nomer</h3>
                    <form action='php/restatus.php' method='post'>
                    <input type='text' name='id' value='$id' hidden>
                    <select name='stats'>
                        <option value='$status'>$status</option>
                        <option value='Откланена'>Откланена</option>
                        <option value='Принята в работу'>Принята в работу</option>
                        <option value='Выполнена'>Выполнена</option>
                    </select>
                    <button>Изменить статус</button>
                    </form>
                    <h5>Гос номер автомобиля: $gos</h5>
                    <p>$opisanie</p></div>
                    ";
                }
                else if($status=='Откланена'){
                    echo "<div class='zayavka'> <h3>Нарушение №$nomer</h3>
                    <h5>Статус: $status</h5>
                    <h5>Гос номер автомобиля: $gos</h5>
                    <p>$opisanie</p></div>
                    ";
                }
                else if($status=='Принята в работу'){
                    echo "<div class='zayavka'><h3>Нарушение №$nomer</h3>
                    <form action='php/restatus.php' method='post'>
                    <input type='text' name='id' value='$id' hidden>
                    <select name='stats'>
                        <option value='$status'>$status</option>
                        <option value='Откланена'>Откланена</option>
                        <option value='Выполнена'>Выполнена</option>
                    </select>
                    <button>Изменить статус</button>
                    </form>
                    <h5>Гос номер автомобиля: $gos</h5>
                    <p>$opisanie</p></div>
                    ";
                }else{
                    echo "<div class='zayavka'><h3>Нарушение №$nomer</h3>
                    <h5>Статус: $status</h5>
                    <h5>Гос номер автомобиля: $gos</h5>
                    <p>$opisanie</p></div>
                    ";
                }
            }
            ?>
        </div>
        
    </main>
    <?php
    include 'php/footer.php';
    ?>
</body>

</html>