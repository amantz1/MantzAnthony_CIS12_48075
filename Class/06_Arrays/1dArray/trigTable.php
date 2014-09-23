<?php
	/*Anthony Mantz
	9/22/2014
	Purpose: Trig Table with 1D Array
	*/
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Trig Table With 1D Array</title>
</head>

<body>
<h1>Trig Table</h1>
<?php
	//Input the data from the form
	$angleStart=$_GET['angleStart'];
	$angleEnd=$_GET['angleEnd'];
	$angleInc=$_GET['angleInc'];
	//Declare the arrays
	$degree=array();
	$radians=array();
	$sine=array();
	$cosine=array();
	$tangent=array();
	//Calculations for each parallel array with for loop
	for($angle=$angleStart;$angle<=$angleEnd;$angle+=$angleInc){
		//Calulate
		$degree[$angle]=$angle;
		$radians[$angle]=number_format($angle*(atan(1)/45),4);
		$sine[$angle]=number_format(sin($radians[$angle]),4);
		$cosine[$angle]=number_format(cos($radians[$angle]),4);
		$tangent[$angle]=number_format(tan($radians[$angle]),4);
	};
?>
<table width="200" border="1">
    <tr>
      <th>Degrees</th>
      <th>Radians</th>
      <th>Sine</th>
      <th>Cosine</th>
      <th>Tangent</th>
    </tr>
<?php
	//Output with for loop
	for($angle=$angleStart;$angle<=$angleEnd;$angle+=$angleInc){
		echo "<tr>";
		echo "<td>".$degree[$angle]."</td>";
		echo "<td>".$radians[$angle]."</td>";
		echo "<td>".$sine[$angle]."</td>";
		echo "<td>".$cosine[$angle]."</td>";
		echo "<td>".$tangent[$angle]."</td>";
		echo "</tr>";
	}
?>
</table>
<?php
	echo "<p>The number of elements in the columns are ".count($degree)."</p>";
?>
</body>
</html>