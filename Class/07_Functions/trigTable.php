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
<title>Trig Table Using Functions</title>
<?php
	function trigTab($angleStart, $angleStop, $angleInc){
		//Declares 2-D array
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
		}
		return $trigTable;
	}
	function display($str, $angleStart, $angleStop, $angleInc, $trigTable){
		echo $str;
		for($angle=$angleStart;$angle<=$angleEnd;$angle+=$angleInc){
			echo "<tr>";
			for($cols=1;$cols<=5;$cols++){
				echo "<td>".$trigTable[$cols][$angle]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
?>
</head>

<body>
    <h1>Trig Table</h1>
        <?php
            //Input the data from the form
            $angleStart=$_GET['angleStart'];
            $angleEnd=$_GET['angleEnd'];
            $angleInc=$_GET['angleInc'];
            //Declare and fill the arrays
            $trigTable=$trigTab($angleStart, $angleEnd, $angleInc);
            //Heading for the table
            $str='<table width="200" border="1">';
            $str.="<tr>";
            $str.="<th>Degrees</th>";
            $str.="<th>Radians</th>";
            $str.="<th>Sine</th>";
            $str.="<th>Cosine</th>";
            $str.="<th>Tangent</th>";
            $str.="</tr>";
            //Display the Trig Table
            display($str, $angleStart, $angleEnd, $angleInc, $trigTable);
		?>
</body>
</html>
