<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 9 - 4 of 10
	*/
?>

<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
        class Person {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
			
			public function getProperty() {
				return $this->isAlive;
			}
        }
        $teacher=new Person();
        $student=new Person;
        echo $teacher->isAlive;
        ?>
      </p>
      <p><a href="../codecademy09_05/codecademy09_05.php" target="_self">Next</a></p>
    </body>
</html>