<?php

session_start();

$con = mysqli_connect('localhost','root','usbw');

mysqli_select_db($con, 'user_registration');

$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from user_table where Ime='$name' and Geslo='$pass'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1){
    $_SESSION['username']=$name;
    header('location:index.php');

}else{
    header('location:register.php');
}



