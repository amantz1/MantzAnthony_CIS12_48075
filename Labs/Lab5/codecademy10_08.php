<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 10 - 8 of 8
	*/
?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class Person {
            public static function say(){
                echo "Here are my thoughts";
            }
        }
        class Blogger extends Person {
            const cats=50;
        }
        Blogger::say();
        echo Blogger::cats;
      ?>
    </p>
  </body>
</html>