// Functions for Roulette Game
$( init );

function init() {
	$('#chip25c').draggable({
		//wierd stuff happening with snap
		//containment: '.betspot',
		//cursor: 'move',
		//snap: '.betspot'
		helper: 'clone'
	});		
	$('#su00').droppable();
	$('su3').droppable();
}
