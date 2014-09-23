<?php
	/*Anthony Mantz
	9/22/2014
	Purpose: Trig Table with 2D Array
	*/
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Trig Table With 2D Array</title>
</head>

<body>
<h1>Trig Table</h1>
<?php
	//Input the data from the form
	$angleStart=$_GET['angleStart'];
	$angleEnd=$_GET['angleEnd'];
	$angleInc=$_GET['angleInc'];
	//Declare the arrays
	$trigTable=array();
	for($col=1;$col<=5;$col++){
		$trigTable[$col]=array();
	}
	//Calculations for each parallel array
	for($angle=$angleStart;$angle<=$angleEnd;$angle+=$angleInc){
		//Calulate
		$trigTable[1][$angle]=$angle;
		$trigTable[2][$angle]=number_format($angle*(atan(1)/45),4);
		$trigTable[3][$angle]=number_format(sin($trigTable[2][$angle]),4);
		$trigTable[4][$angle]=number_format(cos($trigTable[2][$angle]),4);
		$trigTable[5][$angle]=number_format(tan($trigTable[2][$angle]),4);
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
		for($col=1;$col<=5;$col++){
			echo "<td>".$trigTable[$col][$angle]."</td>";
		}
		echo "</tr>";
	};
?>
</table>
</body>
</html>