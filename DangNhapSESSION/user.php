<?php
session_start();
if(empty($_SESSION['id']))
{
    header('location:dangnhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Đây là trang người dùng. Xin chào bạn</h1>
    <a href="Dangxuat.php">Đăng xuất</a>
    <?php
    echo $_SESSION['name'];
    ?>
</body>
</html>