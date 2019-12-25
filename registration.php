<?php


session_start();
header('location:register.php');
$con = mysqli_connect('localhost','root','usbw');

mysqli_select_db($con, 'user_registration');

$name=$_POST['username'];
$pass=$_POST['password'];

// PHP upload image

$s="select * from user_table where Ime='$name'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo"Ime je že zaseden";
    die;
}else{
    // geslo nikoli ne smeš shranjevati kot plain text
    // encrypt password
    $reg="insert into user_table(Ime, Geslo) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Registracija uspešna";
    die;
}



