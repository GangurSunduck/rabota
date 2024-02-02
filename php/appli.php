<?php
    session_start();
    include 'db.php';
    $numberCar=$_POST['numberCar'];
    $message=$_POST['message'];
    $id=$_SESSION['id'];
    $sql="SELECT `application_id` as fg from `application` order by `application_id` desc limit 1";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();
    $stats=$row['fg'];
    $query="INSERT INTO `application` (`user_id`,`number`,`number_car`,`message`) VALUES ('$id','$stats','$numberCar','$message')";
    $link->query($query) or die ($link->error);
    header("Location:/lk.php");
?>