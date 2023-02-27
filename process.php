<?php
    $username = $_POST["user"];
    $password = $_POST["pass"];

    require_once('include/connect.php');
    $sql = "select count(*) from login where username = '$username' and password = '$password'";
    $result = $conn ->query($sql);
    $number_rows = $result -> fetchColumn();
    if($number_rows == 1){
        header('location:admin/index.php');
        exit;
    }
    header('location:login.php?error=Login wrong!');
?>
