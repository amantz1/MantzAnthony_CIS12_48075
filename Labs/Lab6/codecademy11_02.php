<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 2 of 7
	*/
?>

<html>
  <head>
    <title>Associate Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);
            
        // This code will output "blue"...
        echo $myArray[1];
        echo '<br />';
            
        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
      ?>
    </p>
    <p><a href="./codecademy11_03.php" target="_self">Next</a></p>
  </body>
</html>