<?php ob_start();

	try{
	$baglanti = new PDO ("mysql:host=localhost; dbname=villain; charset=utf8", "root", ""); 
	$baglanti -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch (PDOException $e){
		die( $e -> getMessege() );
	}
	
    class users {
        private $veriler = array();

		function sorgum($vt, $sorgu, $tercih=0) {

			$al = $vt -> prepare($sorgu);
			$al -> execute();

			if($tercih == 1):
				return $al -> fetch();
			
			elseif ($tercih == 2):
				return $al;
			endif;
		}

        function sifrele($veri) {
            
            return base64_encode( gzdeflate( gzcompress( serialize($veri) ) ) );
        }

        function coz($veri) {
            
            return unserialize( gzuncompress( gzinflate( base64_decode($veri) ) ) ) ;

        }

        function kuladial($vt) {

            $cookid = $_COOKIE["kulbilgi"];
            $cozduk = self::coz($cookid);

            $sorgusonuc = self::sorgum($vt, "select * from users where id=$cozduk ", 1 );
            return $sorgusonuc["kulad"];
        }


        function giriskontrol($kulad, $sifre, $vt){
            
            $sifrelihal = md5(sha1(md5($sifre)));

            $sor = $vt -> prepare("select * from users where kulad='$kulad' and sifre='$sifrelihal'"); 
            $sor -> execute();

            if ( $sor->rowCount() == 0 ):
                echo '<script>Swal.fire("Oops", "username and password do not match !", "error"); </script>' ;
                header("refresh:2, url=index.php");

            else :
                $gelendeger = $sor -> fetch();
                $sor=$vt->prepare("update users set aktif=1 where kulad='$kulad' and sifre='$sifrelihal'"); 
                $sor->execute();
                echo '<script>Swal.fire("Yess", "entry successful", "success"); </script>' ;
                header("refresh:2, url=feed.php");

                $id = self::sifrele( $gelendeger["id"] );
                setcookie("kulbilgi", $id, time() + 60*60*24 );

            endif;
        }

        function cikis($vt) {

            $cookid = $_COOKIE["kulbilgi"];
            $cozduk = self::coz($cookid);

            self::sorgum($vt, "update users set aktif=0 where id=$cozduk ", 0);
            setcookie("kulbilgi", $cookid, time() - 1);

            echo '<script>Swal.fire("Bye", "exit successful", "success"); </script>' ;
            header("refresh:2, url=index.php");
        }

        function kontrolet($sayfa) {

            if( isset($_COOKIE["kulbilgi"]) ):
                //if( $sayfa=="ind" ) : header("Location:feed.php"); endif;
             
            else:
               //if( $sayfa=="fed" ) : header("Location:index.php"); endif;
                
            endif;
        }

        function kulekle($kulad, $sifre, $vt) {

            $sifrelihal = md5(sha1(md5($sifre)));

            $sor=$vt->prepare("INSERT INTO users (kulad, sifre) VALUES ('$kulad', '$sifrelihal') "); 
            $sor->execute();

        }
    


    }

?>

<head>
  <meta charset="utf-8">
  <title>Villain Pub</title>


  <!-- Fontlar -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap style -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- css lib -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

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

                

    



</body>
</html>
