<?php
	/*Anthony Mantz
	9/16/2014
	Assignment 2: Get wavelength from input.html, convert wavelength to spectrum band, and output result
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Spectrum Band Result</title>
<style type="text/css">
body {
	text-align: center;
	margin-top: 20px;
}
</style>

</head>

<body>
<h1>Spectrum Band Result</h1>
<?php
	//Input the data from the form
	$wavelength=$_GET['wavelength'];
	//Assign the Spectrum Band
	$band;
	if($wavelength>=1){
		$band='Radio';
	}
	else if($wavelength>=-4){
		$band='Microwave';
	}
	else if($wavelength>=-5.5){
		$band='Infared';
	}
	else if($wavelength>=-7){
		$band='Visible';
	}
	else if($wavelength>=-9){
		$band='Ultraviolet';
	}
	else if($wavelength>=-11){
		$band='X-Ray';
	}
	else $band='Gamma Ray';
	//Output the result
	echo "<h3>A wavelength of 10^$wavelength is in the $band band.</h3>";
?>
<img src="xid-8432300_1.png" width="478" height="338" alt="EM Spectrum" />
<p><a href="input.html">Click Here</a> to enter another wavelength.</p>
</body>
</html>