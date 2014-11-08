<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 5 of 8
	*/
?>
<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    $random=rand();
    print $random;
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $myName="Anthony";
    $place=rand(0, strlen($myName-1));
    print substr($myName, $place, 1);
    ?>
    </p>
    <p><a href="./codecademy07_06.php" target="_self">Next</a></p>
</html>