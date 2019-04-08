<?php
	header('no-store');
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	
	
	<!--
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../frameworks/w3.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time()?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	
	
</head>
<body class="vhe" id="body">

	<header>
		<div class="logo">
			<a href="">
				<span>Lorem ipsum</span> dolor.
			</a>
		</div>
		<div class="contact">
			<span>
				<span></span>
				<a href=""></a>
			</span>
			<span>
				<span></span>
				<a href=""></a>
			</span>
		</div>
	</header>
	<nav>
		<ul>
			<li class="first"><a href="index.php">Home</a></li>
			<li><a href="html/gallery.html">Gallery</a></li>
			<li><a href="">Booking</a></li>
			<li><a href="">Blog</a></li>
			<?php 
				if (isset($_SESSION['u_id'])) {
					echo '<li><a href="profile.php">Profile</a></li><li><a href="includes/logout.inc.php">Log Out</a></li>';
				} else {
					echo '<li><a href="signup.php">Recruitment</a></li><li><a href="login.php">Log In</a></li>';
				}
			?>
			<li class="last"><a href="">Rates</a></li>

		</ul>
	</nav>	