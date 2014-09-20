<?php
/*
	Anthony Mantz
    September 3, 2014
    Purpose: Duplicate Truth Table
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Truth Table</title>
<style>
	th {width: 7.7%};
</style>
</head>

<body>
	<?php
		//Echo out a heading
		echo "<h1>Truth Table</h1>";
	?>
	<table width="75%" border="1">
  	<tbody>
    	<tr>
          <th>X</th>
          <th>Y</th>
          <th>!X</th>
          <th>!Y</th>
          <th>X&&Y</th>
          <th>X||Y</th>
          <th>X^Y</th>
          <th>X^Y^Y</th>
          <th>X^Y^X</th>
          <th>!(X&&Y)</th>
          <th>!X||!Y</th>
          <th>!(X||Y)</th>
          <th>!X&&!Y</th>
    	</tr><tr>
        <?php
			$x=true;
			$y=true;
			$c="<style>td {text-align:center};</style>";
			$tc="<style>td {background-color: green};</style>";
			$fc="<style>td {background-color: red};</style>";
			echo $c;
			echo "<td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td>";
		?>
  		</tr><tr>
        <?php
			$y=false;
			echo "<td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td>";
		?>
  		</tr><tr>
        <?php
			$x=false;
			$y=true;
			echo "<td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td>";
		?>
  		</tr><tr>
        <?php
			$y=false;
			echo "<td>".($x?"T":"F")."</td>";
			echo "<td>".($y?"T":"F")."</td>";
			echo "<td>".(!$x?"T":"F")."</td>";
			echo "<td>".(!$y?"T":"F")."</td>";
			echo "<td>".($x&&$y?"T":"F")."</td>";
			echo "<td>".($x||$y?"T":"F")."</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td>";
		?>
  		</tr><tr>
        
  	</tbody>
</table>

</body>
</html>