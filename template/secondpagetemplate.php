<!--
File Name: secondPageTemplate.php
Date: 04/18/18
Programmers: Janice Bradford, Chris Phillips, Patrick Ting
Project: History 251: Albina Street Walking Tour
-->

<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="author" content="Janice Bradford, Chris Phillips, Patrick Ting">
	<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

	<title>African American History Walking Tour</title>

	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Libre+Baskerville" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
	<link href="assets/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/navbar.css" rel="stylesheet" type="text/css">

	<!-- <script src="js/menu.js"></script> -->

	<style>
	  /* use to outline blocks while styling and debugging
	  { outline: 1px solid red !important } */
	</style>
</head>
	
<body>
		
	<header>
		<?php include 'header.php'; ?>
	</header>

	<nav>
		<?php include 'topnavbar.php'; ?>
	</nav>
	
	<main>
		<div class="content">
			
			<article class="content-block">
				<h2>Page Title</h2>
			</article>
			
			<?php include 'divider.php'; ?>
			
			<article class="content-block">
				<p>Page content</p>
			</article>
			
		</div>
	</main>

	<nav>
		<?php include 'bottomnavbar.php'; ?>
	</nav>
	
	<footer>
		<?php include 'footer.php'; ?>
	</footer>
	
</body>

</html>