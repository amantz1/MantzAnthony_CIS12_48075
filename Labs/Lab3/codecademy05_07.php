<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy For Loops 7 of 7
	*/
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        foreach($yardlines as $yardlns){
            echo ($yardlns);
        }
        
        // Write your foreach loop above this line
        echo "touchdown!";
      ?>
    </p>
    <p><a href="./codecademy06_01/codecademy06_01.php" target="_self">Next</a></p>
  </body>
</html>