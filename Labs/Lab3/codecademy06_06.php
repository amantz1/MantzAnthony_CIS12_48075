<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy While Loops 6 of 7
	*/
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Much a do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do { 
			echo "<p>The loop ran even though the loop condition is false.</p>";
		} while ($loopCond);
		echo ("<p>Now the loop is done running.</p>");
    ?>
    <p><a href="./codecademy06_07.php" target="_self">Next</a></p>
    </body>
</html>