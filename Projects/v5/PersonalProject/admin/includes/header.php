<?php #Header for ADMIN section of Starving Student Roulette?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="../includes/styles.css"
</head>

<body>
	<div id="header">
    	<h1>Welcome to the future home of <em>Starving Student Roulette!</em></h1>
    </div>
    <div id="nav">
    	<ul>
        	<li><a href="../index.php" target="_self">Home</a></li>			
        	<li><?php if (isset($_SESSION['admin_id'])){
				echo '<a href="./logout.php">Logout</a>';
			} else {
				echo '<a href="./admin.php">Login</a>';
			}
			?></li>			
            <li>Stats</li>
      	</ul>
    </div>
    <div id="content">
