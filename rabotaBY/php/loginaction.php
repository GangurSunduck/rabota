<?php
    session_start();
    include 'db.php';
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query="SELECT `id`,`login`,`password` FROM `user` WHERE `login`='$login' AND `password`='$password'";
    $result=$link->query($query);
    if($result->num_rows==0){
        header("Location:/login.php?error=Неправильный логин или пароль");
    }
    else if($login=='copp'){
        header("Location:/admin.php");
    }
    else{
        header("Location:/lk.php");
    }
    $row=$result->fetch_assoc();
    $log=$row['login'];
    $id=$row['user_id'];
    $_SESSION['id']=$id;
    $_SESSION['login']=$login;
?>