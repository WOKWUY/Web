<?php
session_start();
include "config1.php";
if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''&& $_POST['repassword'] !=''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $level = 0;
    if($password != $repassword){
        $_SESSION["thongbao"] = "mật khẩu không trùng khớp";
        header("location:register.php");
        die();
    }
    $sql = "SELECT * FROM tbl_user WHERE username = '$username' ";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
    if(mysqli_num_rows($old) > 0){
        $_SESSION["thongbao"] = "Tên đăng nhập bị trùng";
        header("location:register.php");
        die();
    }
    $sql = "INSERT INTO tbl_user (username,password,level) VALUES ('$username','$password','$level')";
    mysqli_query($conn,$sql);
    $_SESSION["thongbao"] = "Đăng ký thành công";
    header("location:login.php");
}
else{
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
    header("location:register.php");
}
?>