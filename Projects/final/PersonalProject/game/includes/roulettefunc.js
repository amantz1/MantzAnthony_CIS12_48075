// Functions for Roulette Game
function betDenom(v){
	betValue=v;
	if (betValue==.25){chipFace='25c';}
	else if (betValue==.50){chipFace='50c';}
	else chipFace=betValue;
	document.getElementById('betinfo').innerHTML=betValue;
}

function betSpot(element, bl){
	betLoc=bl //This will be assigned to the cookie array for the total bet
	//The following creates a div around the image that was clicked and overlays a chip in that spot
	var div = document.createElement('div'),
		img = new Image();
	element.parentElement.insertBefore(div, element);
	div.style.display='inline-block';
	div.style.position='relative';
	div.appendChild(element);
	img.src = "./images/chip"+chipFace+".gif";
	img.style.position='absolute';
	img.style.right=0;
	img.style.top=0;
	div.appendChild(img);
	// The following is to test the bet location being sent to a cookie
	document.getElementById('betloc').innerHTML=betLoc;
	setBet();
}
betTotal=0;
betNum=1;
function setBet(){
	if(betNum>20){alert('No more bets');}
	var betAmount="betAmount"+betNum+"="+betValue;
	document.cookie = betAmount;
	var betLocation="betLocation"+betNum+"="+betLoc;
	document.cookie = betLocation;
	betTotal+=betValue;
	document.getElementById('betamount').innerHTML=betTotal;
	document.cookie = "betTotal="+betTotal;
	betNum++;
}

function clearBet(){
	for(betNum=1;betNum<=20;betNum++){
	var betAmount="betAmount"+betNum+"=";
	document.cookie = betAmount;
	var betLocation="betLocation"+betNum+"=";
	document.cookie = betLocation;
	}
	document.cookie = "betTotal=";
}


$(document).ready(function() {
    $('#placebet').click(function(){
		$.ajax({
			type: 'POST',
			url: './includes/placebets.php',
			success: function(msg){
				document.getElementById('betresult').innerHTML=(msg);
			}
		});
	});
});
/*$(document).ready(function() {
    $('#clearcookies').click(function(){
		$.ajax({
			type: 'POST',
			url: './includes/clearbets.php',
			success: function(msg){
				document.getElementById('betresult').innerHTML=(msg);
			}
		});
	});
});
*/
