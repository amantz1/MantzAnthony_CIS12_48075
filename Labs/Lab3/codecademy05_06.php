<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy For Loops 6 of 7
	*/
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $sentence = array("I'm ", "learning ", "PHP!");
        
        foreach ($sentence as $word) {
          echo $word;
        }
      ?>
    </p>
    <p><a href="./codecademy05_07.php" target="_self">Next</a></p>
  </body>
</html>