<?php 
	/* Anthony Mantz
		8/27/2014
		Assignment 2: Chapter 1 Code Snippets Script 1.5
	*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Predefined Variables</title>
</head>

<body>
	<?php # Script 1.5 - predefined.php
		//Create a shorthand version of the variable names:
		$file = $_SERVER['SCRIPT_FILENAME'];
		$user = $_SERVER['HTTP_USER_AGENT'];
		$server = $_SERVER['SERVER_SOFTWARE'];
		
		//Print the name of this script:
		echo "<p>You are running the file:<br /><b>$file</b>.</p>\n";
		
		//Print the user's information:
		echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";
		
		//Print the server's information:
		echo "<p>This server is running: <br /><b>$server</b></p>\n";
	?>
    <p><a href="Script1.06.php" target="_self">next</a></p>

</body>

</html>