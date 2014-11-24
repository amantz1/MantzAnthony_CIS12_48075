<?php #Alternate test play page for Starving Student Roulette

$page_title = 'Starving Student Roulette - PLAY';
include ('../player/includes/header.php');
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
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

<style type="text/css">
a {cursor:pointer; display:block;color:#ca0000}
a:hover {color:#000}
</style>
</head>

<body>

	<p>Please select your bet denomination:</p>
	<button class="chips" id="25c" >$.25</button>
	<button class="chips" id="50c" >$.50</button>
	<button class="chips" id="1" >$1.00</button>
	<button class="chips" id="5" >$5.00</button>
	<button class="chips" id="10" >$10.00</button>
	<button class="chips" id="25" >$25.00</button>
	<button class="chips" id="100" >$100.00</button>
    
    <p>Your current bet denomination is $<span id="denom"></span></p>
    
	<p>Choose a space to bet on:</p>
    <a class="addBet" name="11">su11</a>
	<a class="addBet" name="49">sp16-17</a>
	<a class="addBet" name="104">st25-27</a>
	<a class="addBet" name="113">c8-9-11-12</a>
    
    <p>You have placed the following bets</p>
    <form>
    <input id="bets" type="text" name="bets" value="" />
	</form>
</body>
</html>
