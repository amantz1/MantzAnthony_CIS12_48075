<?php #Main Game Page of Starving Student Roulette
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Starving Student Roulette - PLAY</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="./includes/roulettefunc.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="includes/gamestyles.css" type="text/css">
<link rel="stylesheet" type="text/css" href="./includes/styles.css"
</head>

<body>
<img src="../includes/headerimage.jpg">
<?php 
	include ('includes/bettable.php'); 
?>
<a href="../index.php">Exit Game</a>

<?php
	include ('../player/includes/footer.php');
?>
<!--<script>
$(document).ready(function() {
	var betDen = .25;
	
	function getBetDen(){
		$('#25c').click(function(){betDen = .25;})
		$('#50c').click(function(){betDen = .50;})
		$('#1').click(function(){betDen = 1;})
		$('#5').click(function(){betDen = 5;})
		$('#10').click(function(){betDen = 10;})
		$('#25').click(function(){betDen = 25;})
		$('#100').click(function(){betDen = 100;})

		return betDen;
	}
		
	$('#denom').text(getBetDen());

	$('a.addBet').click(function(){
		bd=getBetDen();
		if($('#bets').val()==''){
			$('#bets').val($(this).attr('name')+','+bd);
		}else{
			$('#bets').val($('#bets').val()+', '+$(this).attr('name')+','+bd);
		}
	});
});
</script>
-->
<!--
<p>Please select your bet denomination:</p>
	<button class="chips" id="25c" >$.25</button>
	<button class="chips" id="50c" >$.50</button>
	<button class="chips" id="1" >$1.00</button>
	<button class="chips" id="5" >$5.00</button>
	<button class="chips" id="10" >$10.00</button>
	<button class="chips" id="25" >$25.00</button>
	<button class="chips" id="100" >$100.00</button>
    
    <p>Your current bet denomination is $<script>getBetDen();</script></p>
    
	<p>Choose a space to bet on:</p>
    <a class="addBet" name="11">su11</a>
	<a class="addBet" name="49">sp16-17</a>
	<a class="addBet" name="104">st25-27</a>
	<a class="addBet" name="113">c8-9-11-12</a>
    
    <p>You have placed the following bets</p>
    <form>
    <input id="bets" type="text" name="bets" value="" />
	</form>
-->
	