<?php
	/*	Anthony Mantz
		September 29, 2014
		Assignment 5 - Savings table with functions
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Assignment 5 - Savings Table</title>
<?php
	function getData(){
		
	}
	function createSavTab($d, $y){
		$savTab=array();
		for($yr=1;$yr<=$y;$yr++){
			$savTab[$yr]=array();
			for($r=5;$r<=10;$r++){
				$bal=number_format(($d*(pow(1+($r/100),$yr))),2);
				$savTab[$yr][$r]=$bal;
			}
		}
		return $savTab;
	}
	function dispSavTab($savTab, $y){
		echo '<h1>Savings Table Using Functions</h1>';
		echo '<table width="300" border="1">';
        echo '<tr><th>Year</th>';
		for($r=5;$r<=10;$r++){
			echo "<th>".$r."%</th>";
		}
		echo '</tr>';
		for($yr=1;$yr<=$y;$yr++){
			echo "<tr>";
			echo "<td>".$yr."</td>";
			for($r=5;$r<=10;$r++){
				echo "<td>$".($savTab[$yr][$r])."</td>";
			}
			echo "</tr>";
		}
		echo '<table>';
	}
?>
</head>

<body>
	<?php
		$deposit=$_REQUEST['deposit'];
		$years=$_REQUEST['years'];
		$savingsTable=createSavTab($deposit, $years);
		dispSavTab($savingsTable,$years)
	?>

</body>
</html>