<?php
//buoc1: kết nối DB server
    // $host = "localhost";
    // $user = "root";
    // $pass = "";
    // $db = "btth01_cse485";
    // $por = "3306";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');
        echo "Connection successfully";

    } catch(PDOException $e){
           echo "Connection failed".$e->getMessage(); }
?>