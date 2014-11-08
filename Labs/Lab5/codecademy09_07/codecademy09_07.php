<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 9 - 7 of 10
	*/
?>

<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
            class Dog{
                public $numLegs=4;
                public $name;
                public function __construct($name){
                    $this->name=$name;
                }
            }
        ?>
      </p>
      <p><a href="../codecademy09_08/codecademy09_08.php" target="_self">Next</a></p>
    </body>
</html>