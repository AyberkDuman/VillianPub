<?php
include_once("fonk.php");
$users = new users;
$users -> kontrolet("fed");
?>


<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Villain Pub</title>


  <!-- Fontlar -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap style -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- css lib -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  
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

	<section class="feeds-page">
		<!-- feeds nav -->
		<nav class="feeds-nav">
			<div class="icons">
			<a href="#" class="active"><i class="fas fa-home"></i></a>
			<a href="#"><i class="fas fa-hashtag"></i></a>
			<a href="#"><i class="fas fa-bell"></i></a>
			<a href="#"><i class="fas fa-envelope"></i></a>
			</div>

			<div class="search-bar">
				<i class="fas fa-search"></i>
				<input type="text" placeholder="Search on VillianPub" class="search-bar-input" />
			</div>

			<div class="user">
				<div class="user-img-wrapper">
				<img src="img/reaper.svg" width="40" />
				</div>
			
				<a href="#" class="user-link">ayberk</a>
				
			</div>
		</nav>
		<!-- NAV END -->

		<!-- FEEDS CONTENT -->
		<div class="feeds-content">
			<div class="feeds-header" >
				<div class="header-top">
					<h4>Home</h4>
					<i class="far fa-star"></i>
				</div>
				<div class="header-post">
					<div class="header-img-wrapper">
						<img src="img/reaper.svg" />
					</div>
					<input type="text" placeholder="What's your game ?"/>
					<i class="far fa-image"></i>
					<i class="far fa-camera"></i>
					<i class="far fa-chart-bar"></i>
				</div>
			</div>


			<div class="posts">
				
				<div class="post">
					<div class="user-avatar">
						<img src="img/witch.svg"/>
					</div>	
					<div class="post-content">
						<div class="post-user-info">
							<h4>Witch</h4>
							<span>@Witch 15m</span>
						</div>
						<p class="post-text">Email: Do not reply to this email<br>Me: replies to email</p>
						<div class="post-img">
							<img src="img/Skeletor.png"/>
						</div>
						<div class="post-icons">
						<i class="far fa-comment"></i>
						<i class="far fa-retweet"></i>
						<i class="far fa-heart"></i>
						<i class="far fa-share-alt"></i>
						</div>
					</div>
				</div>	

				<div class="post">
					<div class="user-avatar">
						<img src="img/robot.svg"/>
					</div>	
					<div class="post-content">
						<div class="post-user-info">
							<h4>ULTRON</h4>
							<span>@ULTRON 18m</span>
						</div>
						<p class="post-text">You shut me out! You'd think I care?! You take away my world, I'll take away yours<br>beep boop !</p>
						<div class="post-icons">
						<i class="far fa-comment"></i>
						<i class="far fa-retweet"></i>
						<i class="far fa-heart"></i>
						<i class="far fa-share-alt"></i>
						</div>
					</div>
				</div>	

				<div class="post">
					<div class="user-avatar">
						<img src="img/alien.svg"/>
					</div>	
					<div class="post-content">
						<div class="post-user-info">
							<h4>alien</h4>
							<span>@alien 24m</span>
						</div>
						<p class="post-text">HELLO from area 51 :)</p>
						<div class="post-img">
							<img src="img/allienpost.jpeg"/>
						</div>
						<div class="post-icons">
						<i class="far fa-comment"></i>
						<i class="far fa-retweet"></i>
						<i class="far fa-heart"></i>
						<i class="far fa-share-alt"></i>
						</div>
					</div>
				</div>	

			</div>

			<div class="follow">
				<h3 class="follow-heading">Who to follow</h3>
				<div class="follow-user">
					<div class="follow-user-img">
						<img src="img/frankenstein2.svg" />
					</div>
					<div class="follow-user-info">
						<h4>FrankensteinAlive</h4>
					</div>
					<button type="button" class="follow-btn">Follow</button>
				</div>
				<div class="follow-user">
					<div class="follow-user-img">
						<img src="img/serial-killer.svg" />
					</div>
					<div class="follow-user-info">
						<h4>BadGuy0123</h4>
					</div>
					<button type="button" class="follow-btn">Follow</button>
				</div>
				<div class="follow-user">
					<div class="follow-user-img">
						<img src="img/mummy.svg" />
					</div>
					<div class="follow-user-info">
						<h4>MummyButSad</h4>
					</div>
					<button type="button" class="follow-btn">Follow</button>
				</div>
				<div class="follow-link">
					<a href="#">Show More</a>
				</div>
				<footer class="follow-footer">
					<ul>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Settings</a></li>
					</ul>
				</footer>
			</div>

		</div>
		<!-- FEEDS CONTENT END -->


		<!-- POST BUTTON -->
		<button type="button" class="post-btn">
			<i class="fas fa-feather-alt"></i>Post
		</button>
		<!-- POST BUTTON END -->


		<!-- SIDEBAR -->
		<div class="sidebar-wrapper">
			<div class="sidebar">
				<div class="sidebar-header">
					<h2>Account Info</h2>
					<i class="fas fa-times"></i>
				</div>
				<div class="sidebar-user">
					<div class="sidebar-user-img">
						<img src="img/reaper.svg"/>
					</div>
				</div>
				<div class="sidebar-user-info">
					<h4>AYBERK</h4>
				</div>
				<div class="following">
					<p class="following-paragraph">
					<span>5 </span>Following
					</p>
					<p class="following-paragraph">
					<span>3 </span>Followers
					</p>
				</div>
				<div class="sidebar-list-1">
					<ul>
						<li><a href="profile.php">
						<i class="fas fa-user"></i>Profile
						</a></li>
						<li><a href="#">
						<i class="far fa-list-alt"></i>List
						</a></li>
						<li><a href="#">
						<i class="far fa-bookmark"></i>Bookmarks
						</a></li>
						<li><a href="#">
						<i class="fab fa-adversal"></i>Ads
						</a></li>
						<li><a href="#">
						<i class="fas fa-chart-line"></i>Analytics
						</a></li>
					</ul>
				</div>
				<div class="sidebar-list-2">
					<ul>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Help Center</a></li>
						<li><a href="feed.php?sayfa=cikis">Logout</a></li>
					</ul>
				</div>
			</div>
			<!-- SIDEBAR FONK-->
			<?php
				@$sayfa=$_GET["sayfa"];

				switch ($sayfa):

					case "cikis":
					$users->cikis($baglanti);
					break;


				endswitch;

			?>
			<!-- SIDEBAR FONK END -->
		</div>
		<!-- SIDEBAR END -->

		



	</section>


</body>
</html>
<script src="Script.js"></script>