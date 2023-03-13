<?php
$name = $_POST['txttentg'];
$img = $_FILES['hinhanh'];
$file_name = basename($img['name']);
$folder = '../images/songs/';
$path_file = $folder . $file_name;
//die($path_file);
move_uploaded_file($img['tmp_name'], $path_file);
//$id = $_POST['txtId'];

$author = [
   // 'id'    => $id,
    'name'        => $name,
    'img'        => $file_name,
]; 

require('../includes/connect.php');
$sql = "insert into tacgia(ten_tgia, hinh_tgia) values (:name, :img)";
 //$sql = "UPDATE tacgia
  //          SET ten_tgia = :name WHERE ma_tgia = '$id';";

require('../includes/functions.php');
try {                       
    //sửa tên                      // Start try block to run SQL
    pdo($conn,$sql, $author);
    header('location:author.php');
} catch (PDOException $e) {  
    echo $e->getMessage();
}
?>