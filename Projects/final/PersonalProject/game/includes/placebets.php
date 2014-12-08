<?php
/*echo 'it worked';
function placeBet(){
	$x='it worked x2';
	return $x;
}
echo $betPlaced=placeBet();
*/
function getSpin(){
	$s=3;
	return $s;
}
function spinResults($s){
require ('../../../../../mysqli_connect.php');
	$spin=$s;
	$winAmount=0;
	//determine which bets are eligible for wins
	$q="SELECT en.bet_name, xref.number_id, xref.payout, xref.number_id FROM am1346043_pers_xref_number_bet AS xref, am1346043_pers_enum_bets AS en WHERE xref.bet_id = en.bet_id AND xref.number_id=$spin";
	$r=mysqli_query($dbc, $q);
	$msg='';
	//Loop through db results
	while ($row=mysqli_fetch_array($r, MYSQLI_ASSOC)){
		//$msg.=$row['bet_name']."  ".$row['payout']."<br/>";
		$betNum=1;
		//while (isset($_COOKIE["'betLocation".$betNum."'"])){
		if (isset($_COOKIE['betLocation1'])){
			if ($_COOKIE['betLocation1']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount1']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation2'])){
			if ($_COOKIE['betLocation2']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount2']*$row['payout'];
			}
		}
		
		////////////////////figure out how to make the cookie id iterate////////////////////
		
	/*		if($_COOKIE["'betLocation".$betNum."'"]==$row['en.bet_name']){
				$winAmount+=($_COOKIE["'betAmount".$betNum."'"]*$row['payout']);
			}
			$betNum++;
		}*/
	//	if(isset($_COOKIE['betLocation1'])){
	//		$winAmount+=$_COOKIE['betAmount1']*$row['payout'];
	//	}
	}
	if ($winAmount==0){
		$msg='No win on this round';
	}
	else {
		$msg='WINNER! You just won $'.$winAmount;
	}
	return $msg;
}
//Function Calls
$spin=getSpin();
if($spin==37){echo '<p>The winning number is 0</p>';}
else if ($spin==38){echo '<p>The winning number is 00</p>';}
else echo '<p>The winning number is '.$spin.'</p>';
echo $results=spinResults($spin);
?>
