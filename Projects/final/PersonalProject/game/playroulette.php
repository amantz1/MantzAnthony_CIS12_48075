<?php #Main Game Page of Starving Student Roulette
?>
<html>
<head>
<meta charset="UTF-8">
<title>Starving Student Roulette - PLAY</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>-->
<script src="./includes/roulettefunc.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="includes/gamestyles.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../includes/styles.css"
</head>

<body>

<img src="../includes/headerimage.jpg">
<?php 
	include ('includes/bettable.php'); 
?>
<a href="../index.php">Exit Game</a>

<?php
	include ('../player/includes/footer.php');
?>
	