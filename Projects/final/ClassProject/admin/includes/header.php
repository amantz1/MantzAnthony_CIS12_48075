<?php #Header for Rock and a Hard Place Productions - ADMIN Section?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="../includes/styles.css">
</head>

<body>
	<div id="container">
        <div id="header">
        <img src="../../images/raahppheader.jpg" width="800" height="100" alt=""/>
            <div id="nav">
                <ul>
                    <li><a href="../index.php" target="_self">Home</a></li>			
                    <li><?php if (isset($_SESSION['admin_id'])){
                        echo '<a href="./logout.php">Logout</a>';
                    } else {
                        echo '<a href="./admin.php">Login</a>';
                    }
                    ?></li>
                    <li><a href="./admin_dashboard.php" target="_self">Admin Dashboard</a></li>		
                </ul>
        	</div>
		</div>
    	<div id="content">
    