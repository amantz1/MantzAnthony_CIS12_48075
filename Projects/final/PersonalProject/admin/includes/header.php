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
    <img src="../includes/headerimage.jpg" width="1200" height="150" alt=""/> </div>
<div id="container">
    <div id="nav">
    	<ul>
        	<li><a href="../index.php" target="_self">Home</a></li>			
        	<li><?php if (isset($_SESSION['admin_id'])){
				echo '<a href="./logout.php">Logout</a>';
			} else {
				echo '<a href="./admin.php">Login</a>';
			}
			?></li>			
            <li><a href="./admin_dashboard.php" target="_self">Admin</a></li>
      	</ul>
    </div>
    <div id="content">
