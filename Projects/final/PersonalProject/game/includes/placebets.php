<?php #This page does all of the functions associated with a spin
function getSpin(){
	$s=rand(1,38);
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
		if (isset($_COOKIE['betLocation3'])){
			if ($_COOKIE['betLocation3']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount3']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation4'])){
			if ($_COOKIE['betLocation4']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount4']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation5'])){
			if ($_COOKIE['betLocation5']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount5']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation6'])){
			if ($_COOKIE['betLocation6']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount6']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation7'])){
			if ($_COOKIE['betLocation7']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount7']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation8'])){
			if ($_COOKIE['betLocation8']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount8']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation9'])){
			if ($_COOKIE['betLocation9']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount9']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation10'])){
			if ($_COOKIE['betLocation10']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount10']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation11'])){
			if ($_COOKIE['betLocation11']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount11']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation12'])){
			if ($_COOKIE['betLocation12']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount12']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation13'])){
			if ($_COOKIE['betLocation13']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount13']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation14'])){
			if ($_COOKIE['betLocation14']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount14']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation15'])){
			if ($_COOKIE['betLocation15']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount15']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation16'])){
			if ($_COOKIE['betLocation16']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount16']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation17'])){
			if ($_COOKIE['betLocation17']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount17']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation18'])){
			if ($_COOKIE['betLocation18']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount18']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation19'])){
			if ($_COOKIE['betLocation19']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount19']*$row['payout'];
			}
		}
		if (isset($_COOKIE['betLocation20'])){
			if ($_COOKIE['betLocation20']==$row['bet_name']){
				$winAmount+=$_COOKIE['betAmount20']*$row['payout'];
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
	$ui=$_COOKIE['user_id'];
	$balChange=$winAmount-$_COOKIE['betTotal'];
	$bq="UPDATE am1346043_pers_entity_user SET user_balance=(user_balance+$balChange) WHERE user_id=$ui";
	$br=mysqli_query($dbc, $bq);
	return $msg;
}
//Function Calls

$spin=getSpin();
	if($spin==37){echo '<p>The winning number is 0</p>';}
	else if ($spin==38){echo '<p>The winning number is 00</p>';}
	else echo '<p>The winning number is '.$spin.'</p>';
echo $results=spinResults($spin);
?>
