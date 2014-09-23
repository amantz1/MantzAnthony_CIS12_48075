<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy While Loops 2 of 7
	*/
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Your First PHP while loop!</title>
	</head>
	<body>
    <?php
	$loopCond = true;
	while ($loopCond==true){
		//Echo your message that the loop is running below
		echo ("<p>The loop is running.</p>");
		$loopCond = false;
	}
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>