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
                            <span style=" margin: 0; text-align: center;"><h1>LaLiga</h1></span> 
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
                                                    <th class="Lestvica"><a href="#"><strong>Barcelona</strong></a></ht>
                                                    <th class="Lestvica">12</th>
                                                    <th class="Lestvica">8</th>
                                                    <th class="Lestvica">1</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">33:15</th>
                                                    <th class="Lestvica">25</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: blue;">2.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Real Madrid</strong></a></th>
                                                    <th class="Lestvica">12</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">1</th>
                                                    <th class="Lestvica">25:9</th>
                                                    <th class="Lestvica">25</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: blue;">3.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Atlético Madrid</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">6</th>
                                                    <th class="Lestvica">6</th>
                                                    <th class="Lestvica">1</th>
                                                    <th class="Lestvica">15:8</th>
                                                    <th class="Lestvica">24</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: blue;">4.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Sevilla</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">17:14</th>
                                                    <th class="Lestvica">24</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: orange;">5.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Real Sociedad</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">21:14</th>
                                                    <th class="Lestvica">23</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica" style="color: orangered;">6.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Ath. Bilbao</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">13:8</th>
                                                    <th class="Lestvica">20</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">7.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Getafe CF</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">18:15</th>
                                                    <th class="Lestvica">20</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">8.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Granada</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">6</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">19:17</th>
                                                    <th class="Lestvica">20</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">9.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Valencia</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">5</th>
                                                    <th class="Lestvica">3</th>
                                                    <th class="Lestvica">19:18</th>
                                                    <th class="Lestvica">20</th>
                                    </tr>
                                
                              
                                    <tr class="vrstica">
                                                    <th class="Lestvica">10.</th>
                                                    <th class="Lestvica"><a href="#"><strong>Osasuna</strong></a></th>
                                                    <th class="Lestvica">13</th>
                                                    <th class="Lestvica">4</th>
                                                    <th class="Lestvica">7</th>
                                                    <th class="Lestvica">2</th>
                                                    <th class="Lestvica">16:13</th>
                                                    <th class="Lestvica">19</th>
                                    </tr>


                                    <tr class="vrstica">
                                            <th class="Lestvica">11.</th>
                                            <th class="Lestvica"><a href="#"><strong>Villarreal</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">5</th>
                                            <th class="Lestvica">3</th>
                                            <th class="Lestvica">5</th>
                                            <th class="Lestvica">26:19</th>
                                            <th class="Lestvica">18</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">12.</th>
                                            <th class="Lestvica"><a href="#"><strong>Levante</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">5</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">6</th>
                                            <th class="Lestvica">16:16</th>
                                            <th class="Lestvica">17</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">13.</th>
                                            <th class="Lestvica"><a href="#"><strong>Valladolid</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">5</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">14:17</th>
                                            <th class="Lestvica">17</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">14.</th>
                                            <th class="Lestvica"><a href="#"><strong>Alavés</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">3</th>
                                            <th class="Lestvica">6</th>
                                            <th class="Lestvica">14:18</th>
                                            <th class="Lestvica">15</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">15.</th>
                                            <th class="Lestvica"><a href="#"><strong>Eibar</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">3</th>
                                            <th class="Lestvica">6</th>
                                            <th class="Lestvica">14:21</th>
                                            <th class="Lestvica">15</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">16.</th>
                                            <th class="Lestvica"><a href="#"><strong>RCD Mallorca</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">7</th>
                                            <th class="Lestvica">12:19</th>
                                            <th class="Lestvica">14</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica">17.</th>
                                            <th class="Lestvica"><a href="#"><strong>Real Betis</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">4</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">7</th>
                                            <th class="Lestvica">15:23</th>
                                            <th class="Lestvica">13</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica" style="color: red;">18.</th>
                                            <th class="Lestvica"><a href="#"><strong>Celta Vigo</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">3</th>
                                            <th class="Lestvica">8</th>
                                            <th class="Lestvica">7:19</th>
                                            <th class="Lestvica">9</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica" style="color: red;">19.</th>
                                            <th class="Lestvica"><a href="#"><strong>Espanyol</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">2</th>
                                            <th class="Lestvica">9</th>
                                            <th class="Lestvica">7:23</th>
                                            <th class="Lestvica">8</th>
                                    </tr>
                                    
                                    
                                    <tr class="vrstica">
                                            <th class="Lestvica" style="color: red;">20.</th>
                                            <th class="Lestvica"><a href="#"><strong>Leganes</strong></a></th>
                                            <th class="Lestvica">13</th>
                                            <th class="Lestvica">1</th>
                                            <th class="Lestvica">3</th>
                                            <th class="Lestvica">9</th>
                                            <th class="Lestvica">7:22</th>
                                            <th class="Lestvica">6</th>
                                    </tr>

                                  </table>
                                </div>
</body>
</html>