<?php
    include 'db.php';
    $surname=$_POST['surname'];
    $name=$_POST['name'];
    $patronymic=$_POST['patronymic'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $passwordRepeat=$_POST['password-repeat'];

    if($password!=$passwordRepeat){
        header("Location:/reg.php?error=Пароли не совпадают");
    }
    else{
    $query="INSERT INTO `user`(`surname`, `name`, `patronymic`, `login`, `email`, `phone`, `password`, `role`) 
    VALUES ('$surname','$name','$patronymic','$login','$email','$phone','$password','Пользователь')";
    $link->query($query);
    header("Location:/login.php");
    }
?>