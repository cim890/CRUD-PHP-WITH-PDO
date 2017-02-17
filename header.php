<!DOCTYPE html>
<html>
<head>
	<title>.::WEBHADE | WEBSITE SAYA::.</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="assets/img/ico.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" media="all"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all"/>
</head>
<body>
	<header>
		<h1 class="judul">Halaman Admin</h1>
	</header>

	<nav class ="menu">
		<ul>
			<li <?php if($thisPage == "Artikel") echo "class='active'"; ?>><a href="index.php">Menu Artikel</a></li>
			<!--<li <?php if($thisPage == "About") echo "class='active'"; ?>><a href="about.php">About</a></li>-->
			<li <?php if($thisPage == "Contact") echo "class='active'"; ?>><a href="contact.php">Menu Contact</a></li>
		</ul>
	</nav>
<?php include 'koneksi.php'; ?>