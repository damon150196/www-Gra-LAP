
function change(object)
{
	var col = $(object).attr('col')*1;
	var row = $(object).attr('row')*1;
	var owner = $(object).attr('owner');
	
	changeColor(owner, col, row);
}

function changeColor(owner, col, row)
{
	var radios = document.getElementsByName('color');
	var color = "#000000";
	for (var i = 0, length = radios.length; i < length; i++)
	{
		if (radios[i].checked)
		{
			color = radios[i].value;
			break;
		}
	}
	if(color != "#000000") $('button[owner="'+owner+'"][col="'+col+'"][row="'+row+'"]').css('background-color', color);
}