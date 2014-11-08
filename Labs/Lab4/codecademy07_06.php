<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 6 of 8
	*/
?>
<html>
    <p>
	<?php
	// Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
    $myArray = array();
    array_push($myArray, "I");
    array_push($myArray, "want");
    array_push($myArray, "a");
    array_push($myArray, "new");
    array_push($myArray, "job!");
    print count($myArray);
	?>
	</p>
    <p><a href="./codecademy07_07.php" target="_self">Next</a></p>
</html>