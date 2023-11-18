<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body align ="center">
    <h1>Đăng nhập</h1>
    <p><?php if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
        }?></p>
    <form action="login_submit.php" method="POST">
        <table align ="center">
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr colspan ="2">
                <td></td>
                <td>
                    <button type="submit" name="submit">Đăng nhập</button>
                    <button><a href="register.php"style="text-decoration: none" >Đăng ký</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>