// Functions for Roulette Game
function betDenom(v){
	betValue=v;
	document.getElementById('betinfo').innerHTML=betValue;
}

function betSpot(element, src, alt){
	//betloc=s;
	var div = document.createElement('div'),
		img = new Image();
	element.parentElement.insertBefore(div, element);
	div.style.display='inline-block';
	div.style.position='relative';
	div.appendChild(element);
	img.src = "./images/chip"+betValue+".gif";
	img.style.position='absolute';
	img.style.right=0;
	img.style.top=0;
	div.appendChild(img);

	
	
	//document.getElementById(betloc).innerHTML='<img src="./images/chip1.gif">'
}
/*
$(document).ready(function () {
    //Counter
    counter = 0;
    //Make element draggable
    $(".chip").draggable({
        helper: 'clone',
        containment: 'Table_01',
        //When first dragged
        stop: function (ev, ui) {
            var pos = $(ui.helper).offset();
            objName = "#clonediv" + counter
            $(objName).css({
                "left": pos.left,
                "top": pos.top
            });
            $(objName).removeClass("drag");
            //When an existiung object is dragged
            $(objName).draggable({
                containment: 'parent',
                stop: function (ev, ui) {
                    var pos = $(ui.helper).offset();
                    console.log($(this).attr("id"));
                    console.log(pos.left)
                    console.log(pos.top)
                }
            });
        }
    });
    //Make element droppable
    $(".betspot").droppable({
        drop: function (ev, ui) {
            if (ui.helper.attr('id').search(/chip[0-9]/) != -1) {
                counter++;
                var element = $(ui.draggable).clone();
                element.addClass("tempclass");
                $(this).append(element);
                $(".tempclass").attr("id", "clonediv" + counter);
                $("#clonediv" + counter).removeClass("tempclass");
                //Get the dynamically item id
                draggedNumber = ui.helper.attr('id').search(/drag([0-9])/)
                itemDragged = "dragged" + RegExp.$1
                console.log(itemDragged)
                $("#clonediv" + counter).addClass(itemDragged);
            }
        }
    });
});
*/
