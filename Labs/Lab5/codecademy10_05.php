<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 10 - 5 of 8
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
          final public function honk() {
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
  </body>
</html>