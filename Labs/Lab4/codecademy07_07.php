<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 7 of 8
	*/
?>
<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
    $myArray= array("I", "want", "a", "new", "job!");
    sort($myArray);
    print join(",", $myArray);
	?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
    rsort($myArray);
    print join(",", $myArray);
	?>
	</p>
    <p><a href="./codecademy07_08.php" target="_self">Next</a></p>
</html>