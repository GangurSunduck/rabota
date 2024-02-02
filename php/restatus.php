<?php
include 'db.php';
    $id=$_POST['id'];
    $status=$_POST['stats'];
    $query="UPDATE `application` SET `status`='$status' where `application_id`='$id'";
    $link->query($query);
    header("Location:/admin.php");
?>