<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade Ternary</title>
</head>

<body>
<?php
	//Initialize the input
	$score=rand(50,100);
	//Determine the grade (eveything from line 13-16 is considered 1 line of code
	$grade=($score>=90)?'A':(
		   ($score>=80)?'B':(
		   ($score>=70)?'C':(
		   ($score>=60)?'D':'F')));
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>"	
?>
</body>
</html>