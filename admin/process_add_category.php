<?php
    $name = $_POST['txtCatName'];  
    $id =$_POST['txtCatId'] ;
    echo($id);
    require('../includes/connect.php');
    $sql = "insert into theloai(ten_tloai) values (:name)";
    $sql = "UPDATE theloai SET ten_tloai = :name WHERE ma_tloai = '$id';";
    require('../includes/function.php');
    try {                                          
        PDO ($conn,$sql, ['name' => $name]);
        header('location:category.php');
    } catch (PDOException $e) {  
        echo $e->getMessage();
    }
    
?>