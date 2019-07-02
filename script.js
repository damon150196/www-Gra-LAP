var mouseIsDown = false;

var board = [
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"],
	["white","white","white","white","white","white","white","white","white","white"]
		];


function change(object)
{
	var col = $(object).attr('col')*1;
	var row = $(object).attr('row')*1;
	var owner = $(object).attr('owner');
	
	changeColor(owner, col, row);
}

function changeIfOver(object)
{
	var col = $(object).attr('col')*1;
	var row = $(object).attr('row')*1;
	var owner = $(object).attr('owner');
	
	if(mouseIsDown === true) changeColor(owner, col, row);
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
	
	fillBoard(color, col, row);
}

function setMouseIsDown(value)
{
	mouseIsDown = value;
}

function fillBoard(color, row, col)
{
	board[row][col] = color;
}

function verifyBoard()
{
	var boardHasWhiteField = false;
	
	var i = 0;
	var j = 0;
	
	var blueCount = 0;
	var redCount = 0;
	var greenCount = 0;
	var yellowCount = 0;
	
	var resultText = document.getElementById("verifyText");
	
	var result = "Rezultat: </br>";
	
	
	for(i=0; i<10; i++){
		for(j=0; j<10; j++){
			if(board[i][j] == "white"){
				boardHasWhiteField = true;
				break;
			}
			else if(board[i][j] == "#FF0000")
				redCount++;
			else if(board[i][j] == "#00FF00")
				greenCount++;
			else if(board[i][j] == "#0000FF")
				blueCount++;
			else if(board[i][j] == "#FFFF00")
				yellowCount++;
		}
	}
	result = result + 
		String(yellowCount) + " żółtych pól<br>" +
		String(greenCount) + " zielonych pól<br>" +
		String(blueCount) + " niebieskich pól<br>" +
		String(redCount) + " czerwonych pól<br>";
		
	
	var isAreaConsistent = true;
	//sprawdzenie spojnosci dla CZERWONEGO
	if(redCount > checkConsistentOfOneColor("#FF0000")){
		result += "Czerwony nie jest spójny<br>";
		isAreaConsistent = false;
	}
	//sprawdzenie spojnosci dla ZIELONEGO
	if(greenCount > checkConsistentOfOneColor("#00FF00")){
		result += "Zielony nie jest spójny<br>";
		isAreaConsistent = false;
	}
	//sprawdzenie spojnosci dla NIEBIESKIEGO
	if(blueCount > checkConsistentOfOneColor("#0000FF")){
		result += "Niebieski nie jest spójny<br>";
		isAreaConsistent = false;
	}
	//sprawdzenie spojnosci dla ŻÓŁTEGO
	if(yellowCount > checkConsistentOfOneColor("#FFFF00")){
		result += "Zółty nie jest spójny<br>";
		isAreaConsistent = false;
	}
	if(boardHasWhiteField)
		resultText.innerHTML = "Nie wszystkie pola są wypełnione!";
	
	if(!boardHasWhiteField && greenCount==25 && yellowCount==25 && redCount==25 && blueCount==25 && isAreaConsistent)
		result = result + "Wszystkie warunki są spełnione<br>";
	else
		result = result + "Nie wszystkie warunki są spełnione<br>";
	
	result += "<br>";
	
	resultText.innerHTML = result;
}

function checkConsistentOfOneColor(color)
{
	var firstElement = new Array(2);
	var visitedFields = [];
	var fifo = [];
	
	//znalezienie miejsca w tablicy z pierwszym wystąpieniem koloru
	var i = 0;
	var j = 0;
	for(i=0; i<10; i++){
		for(j=0; j<10; j++)
			if(board[i][j] == color){
				firstElement[0] = i;
				firstElement[1] = j;
				break;
			}
		if(board[i][j] == color)
			break;
	}
	
	fifo.push([firstElement[0], firstElement[1]]);
	
	do{
		i = fifo[0][0];
		j = fifo[0][1];
		
		//warunek lewy górny róg
		if(i==0 && j==0){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);

		}
		//warunek górna krawędź
		if(i==0 && j>0 && j<9){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);
		}
		//warunek prawy górny róg
		if(i==0 && j==9){
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);
		}
		//warunek prawa krawędź
		if(i>0 && i<9 && j==9){
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);
		}
		//warunek prawy dolny róg
		if(i==9 && j==9){
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
		}
		//warunek dolna krawędź
		if(i==9 && j>0 && j<9){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
		}
		//warunek lewy dolny róg
		if(i==9 && j==0){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
		}
		//warunek lewa krawędź
		if(i>0 && i<9 && j==0){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);
		}
		//warunek pozostałe pola(w środku)
		if(i>0 && i<9 && j>0 && j<9){
			//field po prawo
			if(board[i][j+1] == color)
				if(searchForArray(visitedFields, [i, j+1]) == -1 && searchForArray(fifo, [i, j+1]) == -1)
					fifo.push([i, j+1]);
			//field po lewo
			if(board[i][j-1] == color)
				if(searchForArray(visitedFields, [i, j-1]) == -1 && searchForArray(fifo, [i, j-1]) == -1)
					fifo.push([i, j-1]);
			//field od góry
			if(board[i-1][j] == color)
				if(searchForArray(visitedFields, [i-1, j]) == -1 && searchForArray(fifo, [i-1, j]) == -1)
					fifo.push([i-1, j]);
			//field od dołu
			if(board[i+1][j] == color)
				if(searchForArray(visitedFields, [i+1, j]) == -1 && searchForArray(fifo, [i+1, j]) == -1)
					fifo.push([i+1, j]);
		}
		
		visitedFields.push(fifo.shift());
	} while(fifo.length > 0);
	
	return visitedFields.length;
}

function searchForArray(wholeArray, array){
  var i, j, current;
  for(i = 0; i < wholeArray.length; ++i){
    if(array.length === wholeArray[i].length){
      current = wholeArray[i];
      for(j = 0; j < array.length && array[j] === current[j]; ++j);
      if(j === array.length)
        return i;
    }
  }
  return -1;
}