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





<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="developer" content="...">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<style>

  .dropdown {
                  float: left;
                  overflow: hidden;
                }
                .dropdown .dropbtn {
                  font-size: 16px;  
                  border: none;
                  outline: none;
                  color: skyblue;
                  padding: 14px 16px;
                  background-color: inherit;
                  font-family: inherit;
                  margin: 0;
                  }

                .navbar a:hover, .dropdown:hover .dropbtn {
                  background-color: rgb(94, 177, 255);
                  }

                  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgb(94, 177, 255);
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<header>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li style="font-style: bold;">Vpis</li>
<li><a href="index.php" style="color: skyblue;">Home</a></li>
<li><a href="novice.php" style="color: skyblue;">Novice</a></li>
<li><a href="Lestvica.php" style="color: skyblue;">Lestvice</a></li>
</ul>
</div>


  <body class="mt-3 forms-body">
    <div class="container">
          <div class="login-box">
        <p class="h2 text-center text-primary">Kjer nogomet je doma</p>
        <div class="row">
        <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <!-- Start sign-in form-->
                <form class="mt-5 myForm" action="login.php" method="POST">

                    <?php if(false) : // ($user) : ?>
                        <!-- <input type="hidden" value="<?= (false ? $user->id : "" ) ?>" name="user_id"> -->
                    <?php endif ?>

                    <div class="text-center">
                        <img src="img\kisspng-user-logo-information-service-design-5ba34f88a0c3a6.5907352915374293846585.jpg" alt="User Logo" width="120" height="90">
                        <h2 class="mt-2 font-weight-normal">Prijavi se tukaj</h2>
                    </div>
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                        <label>
                            <input type="checkbox" class="form-check-input" name="remember_me" value="">Zapomni si me
                        </label>
                    </div>   
                    <button type="submit" name="signin" class="mt-2 btn btn-primary btn-block">Vpisi se</button> 
                    <!-- Button trigger modal -->
                    <div class="text-center">
                        <button type="button" class="mt-3 btn btn-link" data-toggle="modal" data-target="#myModal">
                            Ustvari Račun
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4"></div> 
        </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Ustvari Račun</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Start sign-up form-->
            <form class="mt-5 myForm" action="registration.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        <img src="img\kisspng-user-logo-information-service-design-5ba34f88a0c3a6.5907352915374293846585.jpg" alt="User Logo" width="120" height="90">
                        <h2 class="mt-2 font-weight-normal">Registriraj se tukaj</h2>
                    </div>
                    <input type="file" name="avatar">
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="signin" class="mt-2 btn btn-success btn-block">Vpisi se</button> 
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</header>  
</body>
</html>
