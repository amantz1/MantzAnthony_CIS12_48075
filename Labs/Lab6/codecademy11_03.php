<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 3 of 7
	*/
?>

<html>
  <head>
    <title>Making the Connection</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices.
        // Add 'BMW' as the last element in the array!
        $car = array(2012, 'blue', 5, "BMW");

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' =>'BMW');
            
        // This code should output "BMW"...
        echo $car[3];
        echo '<br />';
            
        // ...and so should this!
        echo $assocCar['make'];
      ?>
    </p>
    <p><a href="./codecademy11_04.php" target="_self">Next</a></p>
  </body>
</html>