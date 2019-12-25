<?php
session_start();
session_destroy();

header('location:register.php');
echo 'You have been logged out. <a href="">Go back</a>';
?>