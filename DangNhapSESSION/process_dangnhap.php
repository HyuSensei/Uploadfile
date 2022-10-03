<?php 
$email=$password="";
if(isset($_POST['email']))
{
    $email=$_POST['email'];
}
if(isset($_POST['password']))
{
    $password=$_POST['password'];
}
require_once('connect.php');
$sql="select * from user where email='$email' and password='$password'";
$result=mysqli_query($connect,$sql);
$number_rows= mysqli_num_rows($result);

if($number_rows==1)
{
    session_start();
    $each=mysqli_fetch_array($result);
    $_SESSION['id']=$each['id'];
    $_SESSION['name']=$each['name'];
    header('location:user.php');
    exit();
} 
header('location:Dangnhap.php?Loi dang nhap');
mysqli_close($connect);