<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 5 of 7
	*/
?>

<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      // Create your own array here and loop
      // through it using foreach!
      $change=array('penny'=>1, 'nickel'=>5, 'dime'=>10, 'quarter'=>25);
      foreach($change as $coin=>$amount){
          echo $coin.' is '.$amount.' cents <br />';
      }
      ?>
    </p>
    <p><a href="./codecademy11_06.php" target="_self">Next</a></p>
  </body>
</html>