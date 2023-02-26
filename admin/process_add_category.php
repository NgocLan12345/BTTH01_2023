<?php
    $name = $_POST['txtCatName'];
    $id = $_POST['txtCatId'];
    echo($id);

    require('../includes/connect.php');
    $sql ="insert into theloai(ten_tloai) values (:name)";
    $sql ="UPDATE theloai SET ten_tloai = :name WHERE ma_tloai = '&id;";

    //die ($sql);
    require('../includes/functions.php');
    try{
        pdo($conn,$sql, ['name' => $name]);
        header('location:category.php');
    }catch(PDOExeption $e){
        echo $e ->getMessage();
    }
?>