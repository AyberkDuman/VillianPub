<?php
include_once("fonk.php");
$users = new users;
$users -> kontrolet("ind");
?>

<!DOCTYPE html >

<head>
  <meta charset="utf-8">
  <title>Villain Pub</title>


  <!-- Fontlar -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap style -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">



   <!-- lib -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="js/main.js"></script>


  <!-- style -->
  <link href="css/style.css" rel="stylesheet">
  <link href="img/favicon.jpg" rel="shortcut icon">

  <!-- sweetalert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  


</head>

<body>
    
   
    <!-- LOGIN -->
      <?php

      if (!$_POST):
      ?>

        <section class="main-page">
        <!-- left -->
            <div class="left">
                <div class="left-content">
                    <div>
                    <img src="img/favicon.jpg" alt="villainPub" width="180" height="180">
                    <h1 class="left-content-logoHeading">Villains need friends too!</h1>
                    </div>
                    <div>
                    <img src="img/ghosts.svg" alt="ghost" width="60" height="60">
                    <h3 class="left-content-heading">Find new friends, or old nemesis</h3>
                    </div>
                    <div>
                    <img src="img/frankenstein.svg" alt="frankenstein" width="60" height="60">
                    <h3 class="left-content-heading">Set up socialization</h3>
                    </div>
                    <div>
                    <img src="img/dracula.svg" alt="dracula" width="60" height="60">
                    <h3 class="left-content-heading">Look for new ways to commit attrocitries from like-minded peers</h3>
                    </div>
                </div>
            </div>
        <!-- END left -->

        <!-- right -->
        <div class="right">  
        <div class="right-content-form">
            <form action="" method="post" >
                <h2>Sign In</h2>
                    <input type="text" name="kulad" placeholder="Username" />
                    <input type="password" name="sifre" placeholder="Password" />
                    <input type="submit" value="Login" />
                    <p class="signup">Don't have an account yet ? <a href="signup.php" >Sign up</a></p>
            </form>
        </div> 
        </div>
        <!-- END right -->
     
     <!-- footer -->
     <footer class="main-page-footer" >
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Bussines</a></li>
            <li><a href="#">Settings</a></li>
            <b>@2021 VillainPub by Ayberk Duman</b>
        </ul>
     </footer>
     <!-- END footer -->
     </section>
     <!-- END main --> 
       <?php


        else:
            $kulad=htmlspecialchars ($_POST["kulad"]);
            $sifre=htmlspecialchars ($_POST["sifre"]);

            if($kulad == "" && $sifre == ""):
            echo '<script>Swal.fire("Oops", "form can not be empty !", "error"); </script>';
            header("refresh:2, url=index.php");
            
            
            else:
            $users->giriskontrol($kulad, $sifre, $baglanti);
        
            endif;

        endif;

      ?>
      
      <!-- END LOGIN -->


</body>
</html>
