<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 9 - 5 of 10
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
            
            public function __construct($firstname, $lastname, $age){
                $this->firstname=$firstname;
                $this->lastname=$lastname;
                $this->age=$age;
            }
        }
        $teacher=new Person("boring", "12345", 12345);
        $student=new Person("Anthony", "Mantz", 35);
        echo $student->age;
        ?>
      </p>
      <p><a href="../codecademy09_06/codecademy09_06.php" target="_self">Next</a></p>
    </body>
</html>