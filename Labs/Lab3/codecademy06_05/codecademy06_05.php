<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy While Loops 5 of 7
	*/
?>
<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>More Coin Flips</title>
	</head>
	<body>
	<p>We will keep flipping a coin as long as the result is heads!</p>
	<?php
	$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T</div>";
		}
	} while ($flip);
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "<p>There {$verb} {$flipCount} {$last}!</p>";
	?>
    <p><a href="../codecademy06_06.php" target="_self">Next</a></p>
    </body>
</html>