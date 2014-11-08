<?php
	/* 	Anthony Mantz
		September 28, 2014
		Assignment 4A - Em Spectrum Band Table without using array
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>EM Spectrum Band Table - No Array</title>
<style type="text/css">
	body {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
	}
	h1, td {
		text-align:center
	}
	table {
		float: right;
	}
</style>
</head>

<body>
<h1>EM Spectrum Band Table (No Array)</h1>
<table width="300" border="1" align="center">
	<tr>
    	<th>Row#</th>
        <th>Wavelength</th>
        <th>Spectrum Band</th>
  	</tr>
    <?php
		$wl=3;
		for($row=1;$row<=16;$row++){
			echo "<tr><td>$row</td>";
			echo "<td>10^".$wl."</td>";
			if($wl>=1){
				$band='Radio';
			}
			elseif($wl>=-2){
				$band='Microwave';
			}
			elseif($wl>=-5){
				$band='Infared';
			}
			elseif($wl>=-6){
				$band='Visible Light';
			}
			elseif($wl>=-9){
				$band='UltraViolet';
			}
			elseif($wl>=-11){
				$band='X-Ray';
			}
			else $band='Gamma Ray';
			echo "<td>$band</td>";
			echo "</tr>";
			$wl--;
		}
	?>
</table>
<img src="xid-8432300_1.png" alt="EMSpectrum" width="478" height="338">

<p style="clear: both;"><a href="EMBand1DArray.php" target="_self">next</a></p>

</body>
</html>