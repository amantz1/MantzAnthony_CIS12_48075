<?php #Top level header for Starving Student Roulette?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="./includes/styles.css"
</head>

<body>
	<div id="header">
    <img src="./includes/headerimage.jpg" width="1200" height="150" alt=""/> </div>
<div id="container">
    <div id="nav">
    	<ul>
        	<li><a href="./index.php" target="_self">Home</a></li>			
        	<li><a href="./player/register.php" target="_self">Register</a></li>			
        	<li><?php if ((isset($_COOKIE['user_id'])) && (basename($_SERVER['PHP_SELF']) != 'logout.php')){
				echo '<a href="./player/logout.php">Logout</a>';
			} else {
				echo '<a href="./player/login.php">Login</a>';
			}
			?></li>
            <li><?php if (!isset($_COOKIE['user_id'])){
				echo '<a href="./player/login.php">Play</a>';
			} else {
				echo '<a href="./game/playroulette.php">Play</a>';
			}
			?></li>
      	</ul>
    </div>
    <div id="content">
