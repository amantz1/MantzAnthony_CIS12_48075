<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 10 - 4 of 8
	*/
?>

<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
            public function honk(){
                return "Beep beep!";
            }
        }
        $bicycle=new Bicycle();
        echo $bicycle->honk();
      ?>
    </p>
    <p><a href="./codecademy10_05.php" target="_self">Next</a></p>
  </body>
</html>