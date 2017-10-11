<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>Welcome to DoubleDown Interactive</title>
	<meta name="description" content="Double Down Interactive, LLC is the leading provider of &#34;fun to play&#34; casino games on the Internet">
	<meta name="keywords" content="DoubleDown, DoubleDown Interactive, Social Gaming" >
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/master-css.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="js/vendor/modernizr.custom.js"></script>
	<script src="assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body class="dd-page-home">
	<div class="dd-header-wrapper">
		<header class="container">
			<a class="dd-header-logo" href="index.php"><h1>DoubleDown Interactive</h1></a>
			<div class="dd-header-callout">
				<h6>We're seeking talent.</h6>
				<a href="careers.php">&raquo; Find Out More</a>
			</div>
			
			<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
							
			<div id="navigation">
				<ul id="dd-header-nav" class="dd-header-nav">
        			<li<?php if ($page == 'index.php') { print ' class="active"'; } ?>><a href="index.php">Home</a></li>
					<li<?php if ($page == 'games.php') { print ' class="active"'; } ?>><a href="games.php">Games</a></li>
					<li<?php if ($page == 'team.php') { print ' class="active"'; } ?>><a href="team.php">Team</a></li>
					<li<?php if ($page == 'careers.php' || $page == 'jobs.php') { print ' class="active"'; } ?>><a href="careers.php">Careers</a></li>
					<li<?php if ($page == 'culture.php') { print ' class="active"'; } ?>><a href="culture.php">Culture</a></li>
					<li> <a href="http://doubledowncasino.com/" target="_blank">Play</a></li>
      			</ul
			</div>

			<div id="dd-header-nav-mobile-icon" class="dd-header-nav-mobile-icon">
				<div class="dd-white-bar"></div>
				<div class="dd-transparent-bar"></div>
				<div class="dd-white-bar"></div>
				<div class="dd-transparent-bar"></div>
				<div class="dd-white-bar"></div>
			</div>
		</header>
	</div>
	