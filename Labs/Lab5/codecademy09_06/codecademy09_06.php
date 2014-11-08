<?php 
	/*	Anthony Mantz
		10/14/2014
		Lab 5 - Codecademy Part 9 - 6 of 10
	*/
?>

<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>This page did not work outside of Codecademy. To skip, click <a href="../codecademy09_07/codecademy09_07.php" target="_self">Next</a></p>
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
            
            public function greet($firstname, $lastname){
                return "Hello, my name is ".$this->$firstname." ".$this->$lastname.". Nice to meet you!:-)";
            }
        }
        $teacher=new Person("boring", "12345", 12345);
        $student=new Person("Anthony", "Mantz", 35);
        echo $teacher->isAlive;
        echo $student->age;
        echo greet($teacher);
        echo greet($student);
        ?>
      </p>
      <p><a href="../codecademy09_07/codecademy09_07.php" target="_self">Next</a></p>
    </body>
</html>