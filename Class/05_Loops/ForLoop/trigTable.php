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
<table width="200" border="1">
    <tr>
      <th>Degrees</th>
      <th>Radians</th>
      <th>Sine</th>
      <th>Cosine</th>
      <th>Tangent</th>
    </tr>
<?php
	//For - Loop
	for($angle=0;$angle<=180;$angle+=5){
		echo "<tr>";echo "<td>";echo "$angle";echo "</td>";
		//Calculate
		$rad=number_format($angle*(atan(1)/45),4);
		$sine=number_format(sin($rad),4);
		$cosine=number_format(cos($rad),4);
		$tangent=number_format(tan($rad),4);
		echo "<td>$rad</td>";
		echo "<td>$sine</td>";
		echo "<td>$cosine</td>";
		echo "<td>$tangent</td>";
		echo "</tr>";
	}
?>
</table>

</body>
</html>