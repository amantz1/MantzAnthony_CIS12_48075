<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 11 - 7 of 7
	*/
?>

<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
        $myArray=array('me'=>'myself',
        'friends'=>'wife',
        'enemies'=>'the dog',
        'others'=>'someone else');
      // On the line below, output one of the values to the page:
     echo $myArray['others'].'<br />';

      // On the line below, loop through the array and output
      // *all* of the values to the page:
     foreach($myArray as $who=>$what){
         echo $who.$what.'<br />';
     }
      ?>
    </p>
  </body>
</html>