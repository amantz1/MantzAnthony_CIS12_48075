<?php
	/*	Anthony Mantz
		September 22, 2014
		Lab 3: Codecademy For Loops 5 of 7
	*/
?>
<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Codecademy Languages</title>
  </head>
  <body>
    <h1>Languages you can learn on Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>
      </ul>
    </div>
    <p><a href="../codecademy05_06.php" target="_self">Next</a></p>
  </body>
</html>