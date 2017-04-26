<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
		if(isset($_SESSION['username'])){
    echo "Welcome '{$_SESSION['username']}'";
}
		echo "<a href='../../logout.php'>Logout</a>";
	}
	else
	{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Diatecian</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="homepage">
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding" class="pull-left">
						<i class="icon-cupcake logo"></i>
						<h1 class="site-title">Wings</h1>
					</a>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="about.html">Session 1</a></li>
							<li class="menu-item"><a href="offer.html">Session 2r</a></li>
							<li class="menu-item"><a href="recipe.html">Session 3</a></li>
							<li class="menu-item"><a href="contact.html">Session 4</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="hero">
				<div class="container">
					<i class="icon-cupcake logo"></i>
					<h1 class="site-title">Wings</h1>
					<small class="site-description">Moral Value and Activity based Learning program</small>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block cooking-section category-block">
					<div class="container">
						<div class="category-content">
							<h1 class="category-title">Pilot Program Schedule</h1>
							<img src="images/Pilot-Program-Schedule.jpg" alt="cooking">
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .cooking-section -->
		</main> <!-- .main-content -->
			
			<footer class="site-footer">
				<div class="container">
					<i class="icon-cupcake logo"></i>
					<nav class="footer-navigation">
						<a href="about.html">About me</a>
						<a href="offer.html">My offer</a>
						<a href="recipe.html">Recipes</a>
						<a href="contact.html">Contact</a>
					</nav>
					
					<div class="colophon">
						<p>Copyright <script type="text/javascript">document.write(new Date().getFullYear())</script> Banyanhub.com. Created by Smithadesgignstudio.co. All right reserved</p>
					</div>
				</div>
			</footer>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
<?php ob_end_flush(); ?>