<?php
session_start();
include "config1.php";
if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $user = mysqli_query($conn,$sql);
    if(mysqli_num_rows($user) > 0 ){
        $_SESSION["user"] = $username;  
        header("location:../../FrontEnd/Trangchu.php");
    }
    else{
        $_SESSION["thongbao"] = "Tên đăng nhập hoặc mật khẩu không đúng";
        header("location:login.php");
    }
}
else{
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
    header("location:login.php");
}
?>