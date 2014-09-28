<?php
	/* 	Anthony Mantz
		September 28, 2014
		Assignment 4B - Em Spectrum Band Table using 1-d array
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>EM Spectrum Band Table - 1-D Array</title>
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
<h1>EM Spectrum Band Table (1-D Array)</h1>
<?php
	//Declare the arrays
	$row=array();
	$wl=array();
	$band=array();
	$wlCount=3; //Starting point for wavelength loop
	//Calculate and fill arrays
	for($i=1;$i<=16;$i++){
		$row[$i]=$i;
		$wl[$i]=$wlCount;
		if($wl[$i]>=1){
			$band[$i]='Radio';
		}
		elseif($wl[$i]>=-2){
			$band[$i]='Microwave';
		}
		elseif($wl[$i]>=-5){
			$band[$i]='Infared';
		}
		elseif($wl[$i]>=-6){
			$band[$i]='Visible Light';
		}
		elseif($wl[$i]>=-9){
			$band[$i]='UltraViolet';
		}
		elseif($wl[$i]>=-11){
			$band[$i]='X-Ray';
		}
		else $band[$i]='Gamma Ray';
		$wlCount--;
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
		for($i=1;$i<=16;$i++){
			echo "<tr><td>$row[$i]</td>";
			echo "<td>10^".$wl[$i]."</td>";
			echo "<td>$band[$i]</td>";
			echo "</tr>";
		}
	?>
</table>
<img src="xid-8432300_1.png" alt="EMSpectrum" width="478" height="338">
</body>
</html>