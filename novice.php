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
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Novice</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
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

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Novice</li>
<li><a href="index.php" style="color: skyblue;">Home</a></li>
<li>
    <div class="dropdown">
        <button class="dropbtn">Lestvice 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Lestvica.php">Prva Liga Slovenije</a>
            <a href="PremierLeague.php">Premier League</a>
            <a href="LaLiga.php">LaLiga</a>
            </div>
        </div> 
</li>
</ul>
</div>
<div class="top-bar-right">
    <ul class="menu">
    <?php if($username) : ?>
        <li><img src="<?= $user->avatar ?>"></li>
        <li>Živjo <?php echo $username ?></li>
        <button type="submit" name="signout" class="mt-2 btn btn-primary btn-block"><a href="logout.php">Izpisi se</button>        
    <?php else : ?>
        <li><a href="register.php"><button type="button" class="button">Vpiši se</button></a></li>
    <?php endif ?>
    </ul>
    </div>
</div>


<div class="row column">
<h4 style="margin: 0;" class="text-center">NOVICE</h4>
</div>
<hr>
<div class="row">
<div class="large-8 columns" style="border-right: 1px solid #E3E5E8; float: left;" >
<article>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\FB_IMG_1567594293930.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Zmaga pod žarometi</a></h5>
<p>
<span><i class="fi-calendar"> 13/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>35 dni dolgo je bilo obdobje, ki ga je preživel Rudar brez zmage. In konec ga je bilo v soboto, ko so Trboveljčani v gosteh, na tekmi pod žarometi, premagali Ivančno Gorico. “Fiat lux” in morda tale zmaga z 1:2, pod reflekorji, res pomeni luč oziroma pot v točkovno plodnejše obdobje.</p>
</div>
</div>
<hr>    
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\xhaka800.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Xhaka ob morebitnem prestopu iz Arsenala</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Arsenalov vezist Granit Xhaka "vojne" z nezadovoljnimi navijači ne more dobiti. Sam se je umaknil, umaknil ga je tudi klub, trener pa ne ve, če bo Švicar še kdaj igral za Arsenal.</p>
</div>
</div>
<hr>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\tekma za ligo prvaku.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Leicester gosti rivala za ligo prvakov</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Leicester City bo svoj povrnjen status ekipe z vrha lestvice Premier League dokazoval proti predstavniku velike šesterice, ki je prav zaradi lisic tik pred razpadom.</p>
</div>
</div>
<hr>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\city800.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Pri Manchester Cityju se bojijo novega napada na avtobus v Liverpoolu</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Varen prehod do stadiona Anfield je glavna in odločna zahteva Manchester Cityja pred nedeljskim derbijem angleške Premier League.</p>
</div>
</div>
<hr>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\SPS_7102.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Prekmurski derbi v Lendavi</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Ta konec tedna se bosta v drugi slovenski ligi pomerila oba prekmurska predstavnika, vodilni Koper pa bo v nedeljo v gosteh branil prednost petih točk.</p>
</div>
</div>
<hr class="novice">
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\bayern-munich-dortmund-tv-600x338.jpeg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Dan za največjo tekmo sezone</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>V nemški Bundesligi se obeta spektakularen vikend, saj bo sobota v znamenju težko pričakovanega Der Klassikerja, ki v zadnjem času znova obuja stari sijaj.</p>
</div>
</div>
<hr>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\zajc800.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">Miha Zajc ostaja rezervist s slabo perspektivo</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Bliža se zimski prestopni rok, z njim pa tudi možnost za slovenskega reprezentanta Miho Zajca, ki je s sedenjem na klopi pri Fenerbahčeju poslabšal svoje reprezentančne opcije.</p>
</div>
</div>
<hr>
<div class="row">
<div class="large-6 columns">
<p><a href="#"><img src="img\nk.jpg" alt="image for article" alt="article preview image"></a></p>
</div>
<div class="large-6 columns">
<h5><a href="#">So Domžale lahko mina za Maribor?</a></h5>
<p>
<span><i class="fi-calendar"> 09/11/2019 &nbsp;&nbsp;</i></span>
</p>
<p>Če Maribor danes zmaga, lahko prevzame vodstvo, toda vprašanje je, kaj v danem trenutku zmorejo Domžale, ki so letos neprepričljive. Celjani odhajajo v Velenje, kjer še vedno ne poznajo zmage.</p>
</div>
</div>
<ul class="pagination" role="navigation" aria-label="Pagination">
    <li class="disabled">Previous <span class="show-for-sr">page</span></li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
    </ul>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
