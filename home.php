<?php

session_start();

$user = FALSE;
$username = false;
if(!empty($_SESSION["username"])) {

  $con = mysqli_connect('localhost','root','usbw');

  mysqli_select_db($con, 'user_registration');

  $username = $_SESSION["username"];

  $s="select * from user_table where Ime='$username' limit 1";

  $result = mysqli_query($con,$s);

  $user = (object) $result->fetch_assoc();
}
?>


<html>
<head>
<title>Home Page</title>
</head>

<body>

    <?php if($user) : ?>
        <h1>Tvoje uporabniško ime je: <?= $user->username ?></h1>
    <?php endif ?>

Welcome
</body>
</html>
