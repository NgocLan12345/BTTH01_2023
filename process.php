<?php
$user = $_POST['txtUser'];
$password = $_POST['txtPass'];

require_once 'includes/connect.php';
$sql = "select count(*) from login where username = '$user' and password='$password'";
$result = $conn ->query($sql);
$number_rows = $result->fetchColumn();
if($number_rows == 1){
    header('location:admin/index.php');
    exit;
}
header('location:login.php?error=Login Wrong!');