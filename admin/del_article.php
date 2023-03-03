<?php
    $id = $_GET['ma_bviet'];
    require('../includes/connect.php');
    $sql = "delete from baiviet where ma_bviet = '$ma_bviet'";
    $statement = $conn->query($sql);
    header('location:article.php');
?>