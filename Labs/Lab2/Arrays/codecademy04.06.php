<?php
	/*	Anthony Mantz
		September 16, 2014
		Lab 2: Codecademy Arrays 6 of 7
	*/
?>

<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        // Write the code to modify
        // the $languages array!
        $languages[2]="Cobra";
        print $languages[2];
      ?>
    </p>
  </body>
</html>