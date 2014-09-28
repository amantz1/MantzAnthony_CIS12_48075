<?php
	/* 	Anthony Mantz
		September 28, 2014
		Assignment 4C - Em Spectrum Band Table using 2-d array
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>EM Spectrum Band Table - 2-D Array</title>
<style type="text/css">
	body {
		width: 800px;
	}
	h1, td {
		text-align:center
	}
	table {
		float: right;
	}
	img {
		float: left;
	}
</style>
</head>

<body>
<h1>EM Spectrum Band Table (2-D Array)</h1>
<?php
	//Declare the array
	$embTable=array();
	for($col=1;$col<=3;$col++){
		$embTable[$col]=array();
	}
	//Calculate and fill array
	$wl=3; //wavelength starting point
	for($row=1;$row<=16;$row++){
		for($col=1;$col<=3;$col++){
			$embTable[$row][1]=$row;
			$embTable[$row][2]="10^".$wl;		
			if($wl>=1){
				$embTable[$row][3]='Radio';
			}
			elseif($wl>=-2){
				$embTable[$row][3]='Microwave';
			}
			elseif($wl>=-5){
				$embTable[$row][3]='Infared';
			}
			elseif($wl>=-6){
				$embTable[$row][3]='Visible Light';
			}
			elseif($wl>=-9){
				$embTable[$row][3]='UltraViolet';
			}
			elseif($wl>=-11){
				$embTable[$row][3]='X-Ray';
			}
			else $embTable[$row][3]='Gamma Ray';
		}
		$wl--;
	}	
?>
<table width="300" border="1" align="center">
	<tr>
    	<th>Row#</th>
        <th>Wavelength</th>
        <th>Spectrum Band</th>
  	</tr>
    <?php
		//Output the results
		for($row=1;$row<=16;$row++){
			echo "<tr>";
			for($col=1;$col<=3;$col++){
				echo "<td>".$embTable[$row][$col]."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<img src="xid-8432300_1.png" alt="EMSpectrum" width="478" height="338">
</body>
</html>