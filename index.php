<?php 
session_start();

require 'functions.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>Gum Vault</title>
		<link rel="icon" type="image/png" href=Bubble-Gum.png />
	</head>
	<body>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php')?>
			</header>
			<nav>
				<?php include('layout/nav.php')?>
			</nav>
			<section role="main">
				<?php include('layout/main.php')?>
			</section>
			<footer>
				<?php include('layout/footer.php')?>
			</footer>
		</div>
	</body>
</html>