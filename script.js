//Globale Variablen definieren
var pi = "";
var counter = 0;
var actualPi = "";
var interval;

//Cache auf Variable Pi überprüfen und wenn nicht existiert in Cache laden 
if (localStorage.getItem('save_pi') == undefined){
		//Ajax-Request machen
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code für IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code für IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200) //Wenn alles OK Pi in LocalStorage laden und der Variable Pi zuweisen
		    {
		    	var str_pi = xmlhttp.responseText;
				str_pi = str_pi.replace("\"", ""); //Regex, jojo --> mol en sinvolli Aawändig för das ;)
		    	localStorage.setItem('save_pi', str_pi);
		    	pi = str_pi;
		    }
		  }
		xmlhttp.open("GET","pi.txt",true);
		xmlhttp.send();
}else{
	pi = localStorage.getItem('save_pi'); //Wenn Pi schon im LocalStorage ist, die Zahl laden und der Variable zuweisen
}

//Erledigt einige Dinge, nachdem die Seite geladen wurde
window.onload = function(){
	setting_changeFontsize();
}

//Überprüft ob in einem Eingabefeld Enter gedrückt wurde
window.onkeydown = checkEnter;
function checkEnter(e){
	var keycode;
	var element = document.activeElement;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	
	if(keycode == 13){
		if(element.className == "valInput"){
			switch(element.id){
				case "s_valInput":
					addPos(document.getElementById('s_valInput').value);
					break;
					
				case "t_valInput":
					addPosEachSecond(document.getElementById('t_valInput').value);
					break;
				
				case "g_valInput":
					guessNumber(document.getElementById('g_valInput').value);
					break;
			}
		}
	}
}

//Funktion um bestimmte Anzahl Stellen hinzuzufügen
function addPos(times){
	times = parseInt(times);
    if(times < 0){
		counter += times;
		if(counter <= 0){
			actualPi = "";
			counter = 0;
		} else {
			actualPi = "3." + pi.substring(0,counter);
		}
		document.getElementById("pi").innerHTML = actualPi;
		document.getElementById("position").innerHTML = "[Pos: " + counter.toString() + "]";
    }
    else{
		counter += times;
		if(counter > 1000000){
			alert("Maximum Reached!");
			counter -=times;
			return 0;
		}
		actualPi = "3." + pi.substring(0,counter);
		document.getElementById("pi").innerHTML = actualPi;
		document.getElementById("position").innerHTML = "[Pos: " + counter.toString() + "]";
    }
}

//Fügt jede Sekunde eine Anzahl Stellen hinzu
function addPosEachSecond(dps){
	if(dps == 0){
		clearInterval(interval);
		return 0;
	}
	else if(dps < 0 || !(dps = parseFloat(dps))){
        alert("Please enter a NUMBER that is 0 or higher");
        return 0;
    }
	clearInterval(interval);
	if(counter == 0){
		counter++;
	}
	function printDigit(){
		if(counter > 1000000){
			alert("Maximum Reached!");
			return 0;
		}
		actualPi = "3." + pi.substring(0,counter);
		document.getElementById("pi").innerHTML = actualPi;
		document.getElementById("position").innerHTML = "[Pos: " + counter.toString() + "]";
		counter++;
	}
	interval = setInterval(printDigit,(1000*dps));
}

//Unterbricht die obige Funktion
function pauseInterval(){
	clearInterval(interval);
}


//Setzt die Anzahl Stellen auf 0 zurück
function reset(){
    counter = 1;
    document.getElementById("pi").innerHTML = "";
    document.getElementById("position").innerHTML = "[Pos: 0]";
}

var points = 0;

//Funktion für den Guessmode
function guessNumber(num){
	guessedNum = parseInt(num);
	correctNum = parseInt(pi.charAt(counter));
	if(guessedNum == correctNum){
		document.getElementById("false").style.display = "none";
		document.getElementById("correct").style.display = "block";
		setTimeout(function(){document.getElementById("correct").style.display = "none";},1500);
		points += Math.pow(counter+1,2) * 9;
		document.getElementById("points").innerHTML = points + " P.";
		document.getElementById("points").style.color = "#ceffc9";
		addPos(1);
	}
	else{
		document.getElementById("correct").style.display = "none";
		document.getElementById("false").style.display = "block";
		setTimeout(function(){document.getElementById("false").style.display = "none";},1500);
		counter = 0;
		document.getElementById("points").innerHTML = "0 P.";
		document.getElementById("points").style.color = "#ffffff";
		document.getElementById("pi").innerHTML = "3.";
		points = 0;
		addPos(0);
	}
	document.getElementById("g_valInput").select();
}

//Image Functions
var imgSize = 200;

var n0 = "#1abc9c";
var n1 = "#34ce75";
var n2 = "#3498db";
var n3 = "#9b59b6";
var n4 = "#34495e";
var n5 = "#f1c40f";
var n6 = "#e67e22";
var n7 = "#e74c3c";
var n8 = "#ecf0f1";
var n9 = "#95a5a6";

//Funktion um Bildgrösse zu ändern
function changeSize(){
	if(imgSize == 200){
		imgSize = 300;
		document.getElementById("optionBtn_size").style.backgroundImage = "url(images/size_m.png)";
	}
	
	else if(imgSize == 300){
		imgSize = 400;
		document.getElementById("optionBtn_size").style.backgroundImage = "url(images/size_b.png)";
	}
	
	else if(imgSize == 400){
		imgSize = 200;
		document.getElementById("optionBtn_size").style.backgroundImage = "url(images/size_s.png)";
	}
	
	else{
		alert("ERROR: Impossible Image Size. Reload!");
	}
	
	document.getElementById("imageCanvas").width = imgSize;
	document.getElementById("imageCanvas").height = imgSize;
	document.getElementById("imageCanvas").style.marginLeft = "-"+(imgSize/2+100).toString()+"px";
}

//Lädt das Bild
function loadImage(){
	document.getElementById("colorChoiceContainer").style.display = "none";
	if(document.getElementById("imageCanvas").style.display == "none"){document.getElementById("imageCanvas").style.display = "inline"}
	var size = 10*(imgSize * imgSize);
	
	var mycanvas = document.getElementById("imageCanvas");
	var context = mycanvas.getContext("2d");
	
	var x = 0;
	var y = 0;
	
	var num = 0;
	
	for(var i=0;i<size;i++){
		num=parseInt(pi.charAt(i));
		context.beginPath();
		context.strokeStyle = eval("n"+(num).toString());
		context.rect(x,y,1,1);
		context.stroke();
		x++;
		counter++;
		if(x > (size/1000)){x=0;y++;}
	}
}

//Lädt die Farb-Auswahl
function loadColorChoice(){
	document.getElementById("imageCanvas").style.display = "none";
	document.getElementById("colorChoiceContainer").style.display = "block";
	
	for(var i=0;i<=9;i++){
		document.getElementById("colorChoiceInput"+i.toString()).value = eval("n"+i.toString());
	}
}

//Setzt neue Farben
function setNewColors(){
	var newColor;
	for(var i=0;i<=9;i++){
		newColor = document.getElementById("colorChoiceInput"+i).value;
		eval("n"+i.toString() + "= newColor");
	}
	loadImage();
}

//Öffnet oder schliesst die Settings
function toggleSettings(){
	var settings = document.getElementById("settings");
	var visibility = settings.style.visibility;
	if(visibility == "visible"){
		settings.style.visibility = "hidden";
	}
	else{
		settings.style.visibility = "visible";
	}
}

//Reagiert auf Setting Veränderung der FontSize
function setting_changeFontsize(){
	var pival = document.getElementById("pi");
	var range = document.getElementById("fontsize_range");
	var rangeVal = range.value;
	pival.style.fontSize = rangeVal.toString() + "em";
}