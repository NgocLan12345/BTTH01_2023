<?php
require_once('connect.php');
session_start();

if (isset($_POST['btn'])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    switch ($_POST['btn']) {
        case 'login':
            $result = executeResult('select * from login where username ="' . $user . '" and password = "' . $pass . '"');

            if (count($result) > 0) {
                if (isset($_POST['save_pass'])) {
                    setcookie('username', $user, time() + 3600, '/', '', 0, 0);
                    setcookie('password', $pass, time() + 3600, '/', '', 0, 0);
                }
                $_SESSION['login']=$user;
                header("location:../admin/index.php");
            } else {
                $mess = "tài khoản không tồn tại. Vui lòng kiểm tra lại thông tin đăng nhập";
                header("location:../login.php?notification=".$mess);
            }
            break;
    }
}
?>
