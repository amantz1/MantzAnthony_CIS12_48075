<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>All About Functions</title>
<?php
	//Functions calling other functions
	function fValue1($p, $i, $n){
		return $p*pow((1+$i/100), $n);
	}
	//Functions ultilizing control constructs
	function fValue2($p, $i, $n){
		$fValue=$p;
		for($year=1;$year<=$n;$year++){
			$fValue*=(1+$i/100);
		}
		RETURN $fValue;
	}
	//Functions calling functions calling functions
	function fValue3($p, $i, $n){
		return $p*exp($n*log(1+$i/100));
	}
	//Functions calling themselves
	function fValue4($p, $i, $n){
		if($n==0) return $p;
		else return fValue4($p, $i, $n-1)*(1+$i/100);
	}
	//Difference between pass by value and pass by reference
	//& represents pass by reference
	//Allows variable to be utilize as an unput
	//As wee as an output that is returned
	function fValue5($p, $i, $n, &$fValue){
		$fValue=$p;
		for($year=1;$year<=$n;$year++){
			$fValue*=(1+$i/100);
		}
	}
	//Defaulted parameters
	//To prevent ambiguity these parameters must be to far right of argument list
	function fValue6($p, $i, $n=9){ 
		return $p*pow((1+$i/100), $n);
	}

?>
</head>

<body>
<?php
	//Declare and initialize variables
	$pValue=100;//Present Value in $'s
	$iRate=9;//Interest rate %per year
	$cPeriods=8;//Number of compounding periods (years)
	//Utilize the function
	$fValue1=number_format(fValue1($pValue, $iRate, $cPeriods),2);
	$fValue2=number_format(fValue2($pValue, $iRate, $cPeriods),2);
	$fValue3=number_format(fValue3($pValue, $iRate, $cPeriods),2);
	$fValue4=number_format(fValue4($pValue, $iRate, $cPeriods),2);
	fValue5($pValue, $iRate, $cPeriods, $fValue5);
	$fValue5=number_format($fValue5, 2);
	$fValue6=number_format(fValue6($pValue, $iRate),2);//defaulted value9
	$fValue6A=number_format(fValue6($pValue, $iRate, $cPeriods),2);
	//Display the results
	echo "<p>Present Value = $$pValue</p>";
	echo "<p>Investment Rate = $iRate %</p>";
	echo "<p>Compounding Periods = $cPeriods</p>";
	echo "<p>Future Value1 = $$fValue1</p>";
	echo "<p>Future Value2 = $$fValue2</p>";
	echo "<p>Future Value3 = $$fValue3</p>";
	echo "<p>Future Value4 = $$fValue4</p>";
	echo "<p>Future Value5 = $$fValue5</p>";
	echo "<p>Future Value6 = $$fValue6 <em>Periods defaulted to 9 years</em></p>";
	echo "<p>Future Value6A = $$fValue6A</p>";
?>
</body>
</html>