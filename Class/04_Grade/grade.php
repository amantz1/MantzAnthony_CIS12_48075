<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade</title>
</head>

<body>
<?php
	//Initialize the input
	$score=rand(50,100);
	//Determine the grade
	if($score>=90)$grade='A';
	if($score>=80&&$score<90)$grade='B';
	if($score>=70&&$score<80)$grade='C';
	if($score>=60&&$score<70)$grade='D';
	if($score<60)$grade='F';
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>"	
?>
</body>
</html>