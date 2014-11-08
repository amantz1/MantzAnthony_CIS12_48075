<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 10 - 6 of 8
	*/
?>

<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        // Add your code here...
        const stealth="MAXIMUM";
      }
      // ...and here!
      echo Ninja::stealth;
      
      ?>
    </p>
    <p><a href="./codecademy10_07.php" target="_self">Next</a></p>
  </body>
</html>