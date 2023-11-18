<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang ky</title>
</head>
<body align ="center">
    <h1>Đăng ký thành viên</h1>
    <p><?php if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
        }?></p>
    <form action="register_submit.php" method="POST">
        <table align ="center">
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="username"></td>    
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại Mật khẩu: </td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr colspan="2">
                <td></td>
                <td><button type="submit" name="submit">Đăng ký</button><button type="reset">Làm mới</button></td>   
            </tr>
        </table>
    </form> 
</body>
</html>