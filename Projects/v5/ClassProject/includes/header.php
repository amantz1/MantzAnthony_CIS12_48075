<?php #Header for top level Rock and a Hard Place Productions?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="./includes/styles.css"
</head>

<body>
	<div id="header">
    	<h1>Welcome to the future home of <em>Rock and a Hard Place Productions!</em></h1>
    </div>
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
            <li><a href="./admin/admin.php" target="_self">Admin</a></li>			
      	</ul>
    </div>
    <div id="content">