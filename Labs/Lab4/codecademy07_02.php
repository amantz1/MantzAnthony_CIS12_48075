<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 4: Codecademy Functions Part 1, 2 of 8
	*/
?>
<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myname="Anthony";
    $partial=substr($myname, 0,3);
    echo $partial;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $uppercase=strtoupper($myname);
    print($uppercase);
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $lowercase=strtolower($myname);
    print($lowercase);
    ?>
  </p>
</html>