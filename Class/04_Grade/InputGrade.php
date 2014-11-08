<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade Ternary</title>
</head>

<body>
<?php
	//Utilize the built in capabilities of PHP to grab information passed from a form
	$score=$_GET['score'];
	//Determine the grade (eveything from line 13-16 is considered 1 line of code
	$grade=($score>=90)?'A':(
		   ($score>=80)?'B':(
		   ($score>=70)?'C':(
		   ($score>=60)?'D':'F')));
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>"	
?>
<p>There are multiple snippets of code that display exactly the same, but function differently for this classwork example. To view all the variations of the code, please <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/tree/master/Class/04_Grade" target="new">click here</a> to visit github.</p>
</body>
</html>