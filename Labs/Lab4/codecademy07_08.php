<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 8 of 8
	*/
?>
<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $names=array();
    array_push($names, "Anthony");
    array_push($names, "Katryn");
    array_push($names, "Becky");
    array_push($names, "Joe");
    array_push($names, "Chris");
	// Sort the list
    sort($names);
	// Randomly select a winner!
    $winner=rand(0, count($names)-1);
	// Print the winner's name in ALL CAPS
	print strtoupper($names[$winner]);
	?>
	</p>
</html>