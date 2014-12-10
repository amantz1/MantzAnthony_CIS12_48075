<?php #Header for top level Rock and a Hard Place Productions
session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="./includes/styles.css"
</head>

<body>
	<div id="container">
	<div id="header">
    <img src="../images/raahppheader.jpg" width="800" height="100" alt=""/> </div>
    <div id="nav">
    	<ul>
        	<li><a href="./index.php" target="_self">Home</a></li>			
        	<li><a href="./services.php" target="_self">Services</li>			
        	<li><a href="./user/register.php" target="_self">Register</a></li>			
        	<li><?php if ((isset($_COOKIE['user_id'])) && (basename($_SERVER['PHP_SELF']) != 'logout.php')){
				echo '<a href="./user/logout.php">Logout</a>';
			} else {
				echo '<a href="./user/login.php">Login</a>';
			}
			?></li>			
        	<li><?php if ((isset($_COOKIE['user_id'])) && (basename($_SERVER['PHP_SELF']) != 'logout.php')){
				echo '<a href="./user/cart.php">Cart</a>';
			} else {
				echo '<a href="./user/login.php">Cart</a>';
			}
			?></li>			
      	</ul>
    </div>
    <div id="content">