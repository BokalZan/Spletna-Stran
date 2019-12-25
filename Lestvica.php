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
<title>Dom nogometu</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
<style>
                /*icon styles*/
                .fi-social-facebook {
                  color: dodgerblue;
                  font-size: 2rem;
                }
                .fi-social-youtube {
                  color: red;
                  font-size: 2rem;
                }
                .fi-social-pinterest {
                  color: darkred;
                  font-size: 2rem;
                }
                i.fi-social-instagram {
                  color: brown;
                  font-size: 2rem;
                }
                i.fi-social-tumblr {
                  color: navy;
                  font-size: 2rem;
                }
                .fi-social-twitter {
                  color: skyblue;
                  font-size: 2rem;
                }
              
                p.GrbStrani{
                  float: left;
                  width: 120px;
                  height: 120px;
                }
                .table{
                  border-collapse: collapse;
                  width: 100%;
                }
                th, td {
                  padding: 8px;
                  text-align: left;
                  border-bottom: 1px solid #ddd;
                }

                .dropdown {
                  float: left;
                  overflow: hidden;
                }
                .dropdown .dropbtn {
                  font-size: 16px;  
                  border: none;
                  outline: none;
                  color: black;
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
                <li><a href="index.php">Home</a></li>
                <li><a href="novice.php">Novice</a></li>
                </ul>
              </div>
          <div class="top-bar-left">
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
                
                <div>
                  <h1 style="margin: 0;" class="text-center">DOM NOGOMETU</h1>
                  
                
                </div>

                <div class="row column">
                        <h4 style="margin: 0;" class="text-center">Lestvice</h4>
                </div>
                        <hr>
                        <div class="row">
                        <div class="large-8 columns" style="border-right: 1px solid #E3E5E8; float: left;" >
                        <article>
                </header>
                <table class="table">
                        <div class="rezultati">
                            <span style=" margin: 0; text-align: center;"><h1>Prva Slovenska Liga</h1></span> 
                        </div>
                        <tr class="vrsticaPrva">
                            <th class="Lestvicab"></th>
                            <th class="Lestvicab">Ekipe</th>
                            <th class="Lestvicab">ŠT</th>
                            <th class="Lestvicab">Z</th>
                            <th class="Lestvicab">N</th>
                            <th class="Lestvicab">P</th>
                            <th class="Lestvicab">GR</th>
                            <th class="Lestvicab">TČ</th>
                        </tr>


                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: blue;">1.</ht>
                                                    <th class="Lestvica"><a href="#"><strong>NK Olimpija</strong></a></ht>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">11</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">42:21</th>
                                                    <th class="Lestvica">36</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: orange;">2.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Maribor</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">34:17</th>
                                                    <th class="Lestvica">34</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: orange;">3.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Aluminij</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">30:15</th>
                                                    <th class="Lestvica">34</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">4.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Mura</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">8</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">21:9</th>
                                                    <th class="Lestvica">31</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">5.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Celje</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">35:19</th>
                                                    <th class="Lestvica">28</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">6.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Tabor Sežana</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">20:27</th>
                                                    <th class="Lestvica">17</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">7.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Triglav</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">22:39</th>
                                                    <th class="Lestvica">17</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">8.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Domžale</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">9</th>
                                                    <th class="Lestvica">23:36</th>
                                                    <th class="Lestvica">16</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: orangered;">9.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Bravo</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">19:34</th>
                                                    <th class="Lestvica">13</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: red;">10.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Rudar Velenje</strong></a></th>
                                                    <th class="Lestvica">17</th>
                                                    <th class="Lestvica">0</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">10</th>
                                                    <th class="Lestvica">18:44</th>
                                                    <th class="Lestvica">7</th>
                                    </tr>
                          
                                  </table>
                                </div>
</body>
</html>
