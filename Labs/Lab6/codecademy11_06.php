<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 6 of 7
	*/
?>

<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array('Ace of Spades', 1));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';
      ?>
    </p>
    <p><a href="./codecademy11_07.php" target="_self">Next</a></p>
  </body>
</html>