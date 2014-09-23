<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy For Loops 1 of 7
	*/
?>
<html>
  <head>
    <title>Leap Years</title>
  </head>
  <body>
    <?php
      for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
        echo "<p>$leap</p>";
      }
    ?>
  </body>
</html>