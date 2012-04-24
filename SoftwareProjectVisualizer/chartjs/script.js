
var SuperClassColor = '#CFECEC';
var SelectedClassColor = '#ECD672';
var SubClassColor = '#6AFB92';

function showDetails(classname){
	
	highlightInheritance(classname);
	showInheritedFunctions(classname);
	var xmlhttp;
	var params = "className="+classname;
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  //document.getElementById("phpreturn").innerHTML=str;
  }else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		document.getElementById('ivSourceCode').innerHTML= xmlhttp.responseText;
	}
  }
  	
	xmlhttp.open("POST","inheritance.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);

}
//green - #4CC417 - subclass;
//yellow - #ECD672 - selected class;
//blue - #6698FF - superclass;
function highlightInheritance(className){
	
	if(className == "GameObject"){
		
		clearAllColor();
		document.getElementById('GameObject').style.background = SelectedClassColor;
		document.getElementById('AnimatedGameObject').style.background = SubClassColor;
		document.getElementById('LevelEndPost').style.background = SubClassColor;
		document.getElementById('MainMenu').style.background = SubClassColor;
		document.getElementById('Player').style.background = SubClassColor;
		document.getElementById('Powerup').style.background = SubClassColor;
		document.getElementById('RepeatingGameObject').style.background = SubClassColor;
		document.getElementById('VisualGameObject').style.background = SubClassColor;
	
	} else if(className == "VisualGameObject"){
		
		clearAllColor();
		
		document.getElementById('GameObject').style.background = SuperClassColor;
		document.getElementById('VisualGameObject').style.background = SelectedClassColor;
		document.getElementById('AnimatedGameObject').style.background = SubClassColor;
		document.getElementById('LevelEndPost').style.background = SubClassColor;
		document.getElementById('MainMenu').style.background = SubClassColor;
		document.getElementById('Player').style.background = SubClassColor;
		document.getElementById('Powerup').style.background = SubClassColor;
		document.getElementById('RepeatingGameObject').style.background = SubClassColor;
	
	} else if(className == "MainMenu"){
		
		clearAllColor();
		
		document.getElementById('MainMenu').style.background = SelectedClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('GameObject').style.background = SuperClassColor;
	
	} else if(className == "AnimatedGameObject"){
		
		clearAllColor();
		
		document.getElementById('GameObject').style.background = SuperClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('AnimatedGameObject').style.background = SelectedClassColor;
		document.getElementById('Powerup').style.background = SubClassColor;
		document.getElementById('LevelEndPost').style.background = SubClassColor;
		document.getElementById('Player').style.background = SubClassColor;
	
	} else if(className == "RepeatingGameObject"){
		
		clearAllColor();
		
		document.getElementById('RepeatingGameObject').style.background = SelectedClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('GameObject').style.background = SuperClassColor;
	
	} else if(className == "Powerup"){
		
		clearAllColor();
		
		document.getElementById('GameObject').style.background = SuperClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('AnimatedGameObject').style.background = SuperClassColor;
		document.getElementById('Powerup').style.background = SelectedClassColor;
	
	} else if(className == "LevelEndPost"){
		
		clearAllColor();
		
		document.getElementById('GameObject').style.background = SuperClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('AnimatedGameObject').style.background = SuperClassColor;
		document.getElementById('LevelEndPost').style.background = SelectedClassColor;
	
	} else if(className == "Player"){
	
		clearAllColor();
		
		document.getElementById('GameObject').style.background = SuperClassColor;
		document.getElementById('VisualGameObject').style.background = SuperClassColor;
		document.getElementById('AnimatedGameObject').style.background = SuperClassColor;
		document.getElementById('Player').style.background = SelectedClassColor;
	
	}
	
}

function clearAllColor(){

	document.getElementById('AnimatedGameObject').style.background = '#ffffff';
	document.getElementById('GameObject').style.background = '#ffffff';
	document.getElementById('LevelEndPost').style.background = '#ffffff';
	document.getElementById('MainMenu').style.background = '#ffffff';
	document.getElementById('Player').style.background = '#ffffff';
	document.getElementById('Powerup').style.background = '#ffffff';
	document.getElementById('RepeatingGameObject').style.background = '#ffffff';
	document.getElementById('VisualGameObject').style.background = '#ffffff';
}

//document.getElementById('').style.background = '';

function showInheritedFunctions(classname){
	
	var xmlhttp;
	var params = "className="+classname;
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  //document.getElementById("phpreturn").innerHTML=str;
  }else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		document.getElementById('ivFunctions').innerHTML= xmlhttp.responseText;
	}
  }
  	
	xmlhttp.open("POST","ivFunctions.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);

}