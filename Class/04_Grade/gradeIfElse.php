<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade If Else</title>
</head>

<body>
<?php
	//Initialize the input
	$score=rand(50,100);
	//Determine the grade 
	if($score>=90){
		$grade='A';
	}else if ($score>=80){
		$grade='B';
	}else if ($score>=70){
		$grade='C';
	}else if ($score>=60){
		$grade='D';
	}else{
		$grade='F';
	}
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>"	
?>
</body>
</html>