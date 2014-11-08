<?php
	/*	Anthony Mantz
		September 5, 2014
		Lab 1: Codecademy Conditionals and Control Flow 3 of 4
	*/
?>
<html>
  <head>
    <title>Our Shop</title>
  </head>
  <body>
    <p>
      <?php
        $items =  4 ;  
        if ($items > 5) {
          echo "You get a 10% discount!";
        }
        else {
            echo "You get a 5% discount!";
        }
      ?>
    </p>
    <p><a href="./codecademy02.04.php" target="_self">Next</a></p>
  </body>
</html>