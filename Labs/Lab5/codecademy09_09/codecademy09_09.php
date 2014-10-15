<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 9 - 9 of 10
	*/
?>

<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          // Your code here
          class Cat{
              public $isAlive=true;
              public $numLegs=4;
              public $name;
              public function __construct($name){
                  $this->$name=$name;
              }
              public function meow(){
                  return "Meow meow";
              }
          }
            $cat1=new Cat("CodeCat");
            echo $cat1->meow();
        ?>
      </p>
    </body>
</html>