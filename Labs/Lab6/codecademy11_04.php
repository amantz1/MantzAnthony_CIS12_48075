<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 4 of 7
	*/
?>

<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Add your code here!
        echo $myArray[0];
        echo $myAssocArray['make'];
      ?>
    </p>
    <p><a href="./codecademy11_05.php" target="_self">Next</a></p>
  </body>
</html>