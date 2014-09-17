<?php
	/*Anthony Mantz
	9/15/2014
	Purpose: First for-loop Trig Table
	*/
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Trig Table With For Loop</title>
</head>

<body>

<h1>Trig Table</h1>
<?php
	//Input the data from the form
	$angleStart=$_GET['angleStart'];
	$angleEnd=$_GET['angleEnd'];
	$angleInc=$_GET['angleInc'];
?>
<table width="200" border="1">
    <tr>
      <th>Radians</th>
      <th>Degrees</th>
      <th>Sine</th>
      <th>Cosine</th>
      <th>Tangent</th>
    </tr>
<?php
	//For - Loop
	//for($angleStart;$angleStart<=$angleEnd;$angleStart+=$angleInc){
		//echo "<tr>";echo "<td>";echo "$angleStart";echo "</td>";
	$angle=$angleStart;
		//Calculate
		do{
		$rad=number_format($angleStart*(atan(1)/45),4);
		$sine=number_format(sin($rad),2);
		$cosine=number_format(cos($rad),2);
		$tangent=number_format(tan($rad),2);
		echo "<td>$rad</td>";
		echo "<td>$sine</td>";
		echo "<td>$cosine</td>";
		echo "<td>$tangent</td>";
		echo "</tr>";
		$angle+=$angleInc;
	} 	while($angle<$angleEnd)

?>
</table>

</body>
</html>