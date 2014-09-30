<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 3 of 8
	*/
?>
<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    $pos=strpos("Anthony", "o");
    print $pos;
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos("Anthony", "z")===false){
        print "Sorry, no 'z' in 'Anthony'";
    }
    ?>
    </p>
</html>