// JavaScript Document
window.onload = start;

var SuperClassColor = '#CFECEC';
var SelectedClassColor = '#ECD672';
var SubClassColor = '#6AFB92';

function start(){
	 
}

function FillList(filename){
    var nameoffile;
	document.getElementById('selectedClass').innerHTML = filename;
    var intRegex = /[.js]+$/;
	if(filename =="AnimatedGameObject.js"){

		clearOldFunction();
        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.startupAnimatedGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.startupAnimatedGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.startupAnimatedGameObject').innerHTML='startupAnimatedGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.setAnimation');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.setAnimation\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.setAnimation').innerHTML='setAnimation() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.draw');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.draw\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.draw').innerHTML='draw() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.shutdownAnimatedGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.shutdownAnimatedGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.shutdownAnimatedGameObject').innerHTML='shutdownAnimatedGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.shutdown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.shutdown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.shutdown').innerHTML='shutdown() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','AnimatedGameObject.collisionArea');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'AnimatedGameObject.collisionArea\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('AnimatedGameObject.collisionArea').innerHTML='collisionArea() <br/>';
	
	}else if(filename =="ApplicationManager.js"){
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','ApplicationManager.startupApplicationManager');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'ApplicationManager.startupApplicationManager\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('ApplicationManager.startupApplicationManager').innerHTML='startupApplicationManager() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','ApplicationManager.startLevel');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'ApplicationManager.startLevel\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('ApplicationManager.startLevel').innerHTML='startLevel() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','ApplicationManager.openMainMenu');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'ApplicationManager.openMainMenu\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('ApplicationManager.openMainMenu').innerHTML='openMainMenu() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','ApplicationManager.updateScore');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'ApplicationManager.updateScore\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('ApplicationManager.updateScore').innerHTML='updateScore() <br/>';
		
	}else if(filename == "GameObject.js"){
        var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','GameObject.startupGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObject.startupGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObject.startupGameObject').innerHTML='startupGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObject.shutdownGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObject.shutdownGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObject.shutdownGameObject').innerHTML='shutdownGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObject.shutdown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObject.shutdown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObject.shutdown').innerHTML='shutdown() <br/>';
		
	}else if(filename == "GameObjectManager.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.startupGameObjectManager');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.startupGameObjectManager\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.startupGameObjectManager').innerHTML='startupGameObjectManager() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.draw');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.draw\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.draw').innerHTML='draw() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.shutdownAll');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.shutdownAll\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.shutdownAll').innerHTML='shutdownAll() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.addGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.addGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.addGameObject').innerHTML='addGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.addNewGameObjects');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.addNewGameObjects\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.addNewGameObjects').innerHTML='addNewGameObjects() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.removeGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.removeGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.removeGameObject').innerHTML='removeGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.removeOldGameObjects');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.removeOldGameObjects\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.removeOldGameObjects').innerHTML='removeOldGameObjects() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.keyDown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.keyDown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.keyDown').innerHTML='keyDown() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','GameObjectManager.keyUp');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'GameObjectManager.keyUp\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('GameObjectManager.keyUp').innerHTML='keyUp() <br/>';
		
	}else if(filename == "Level.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);
		
		var e = document.createElement('a');
		e.setAttribute('id','Level.startupLevel');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Level.startupLevel\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Level.startupLevel').innerHTML='startupLevel() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Level.addBlocks');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Level.addBlocks\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Level.addBlocks').innerHTML='addBlocks() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Level.addPowerups');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Level.addPowerups\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Level.addPowerups').innerHTML='addPowerups() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Level.currentBlock');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Level.currentBlock\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Level.currentBlock').innerHTML='currentBlock() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Level.groundHeight');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Level.groundHeight\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Level.groundHeight').innerHTML='groundHeight() <br/>';
		
	}else if(filename == "LevelEndPost.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','LevelEndPost.startupLevelEndPost');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'LevelEndPost.startupLevelEndPost\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('LevelEndPost.startupLevelEndPost').innerHTML='startupLevelEndPost() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','LevelEndPost.shutdown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'LevelEndPost.shutdown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('LevelEndPost.shutdown').innerHTML='shutdown() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','LevelEndPost.shutdownLevelEndPost');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'LevelEndPost.shutdownLevelEndPost\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('LevelEndPost.shutdownLevelEndPost').innerHTML='shutdownLevelEndPost() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','LevelEndPost.update');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'LevelEndPost.update\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('LevelEndPost.update').innerHTML='update() <br/>';
		
	}else if(filename == "Main.js"){

		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		
		var e = document.createElement('a');
		e.setAttribute('id','Main.init');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Main.init\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Main.init').innerHTML='init() <br/>';
		
	}else if(filename == "MainMenu.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','MainMenu.startupMainMenu');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'MainMenu.startupMainMenu\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('MainMenu.startupMainMenu').innerHTML='startupMainMenu() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','MainMenu.keyDown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'MainMenu.keyDown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('MainMenu.keyDown').innerHTML='keyDown() <br/>';
		
	}else if(filename == "Player.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);
		
		var e = document.createElement('a');
		e.setAttribute('id','Player.startupPlayer');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Player.startupPlayer\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Player.startupPlayer').innerHTML='startupPlayer() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Player.keyDown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Player.keyDown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Player.keyDown').innerHTML='keyDown() <br/>';

		var e = document.createElement('a');
		e.setAttribute('id','Player.keyUp');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Player.keyUp\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Player.keyUp').innerHTML='keyUp() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Player.updateAnimation');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Player.updateAnimation\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Player.updateAnimation').innerHTML='updateAnimation() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Player.update');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Player.update\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Player.update').innerHTML='update() <br/>';
		
	}else if(filename == "Powerup.js"){

		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);
		
		var e = document.createElement('a');
		e.setAttribute('id','Powerup.update');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Powerup.update\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Powerup.update').innerHTML='update() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Powerup.startupPowerup');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Powerup.startupPowerup\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Powerup.startupPowerup').innerHTML='startupPowerup() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Powerup.shutdownPowerup');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Powerup.shutdownPowerup\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Powerup.shutdownPowerup').innerHTML='shutdownPowerup() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Powerup.shutdown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Powerup.shutdown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Powerup.shutdown').innerHTML='shutdown() <br/>';
		
	}else if(filename == "Rectangle.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','Rectangle.startupRectangle');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Rectangle.startupRectangle\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Rectangle.startupRectangle').innerHTML='startupRectangle() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','Rectangle.intersects');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'Rectangle.intersects\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('Rectangle.intersects').innerHTML='intersects() <br/>';
		
	}else if(filename == "RepeatingGameObject.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','RepeatingGameObject.startupRepeatingGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'RepeatingGameObject.startupRepeatingGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('RepeatingGameObject.startupRepeatingGameObject').innerHTML='startupRepeatingGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','RepeatingGameObject.shutdownstartupRepeatingGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'RepeatingGameObject.shutdownstartupRepeatingGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('RepeatingGameObject.shutdownstartupRepeatingGameObject').innerHTML='shutdownstartupRepeatingGameObject() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','RepeatingGameObject.draw');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'RepeatingGameObject.draw\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('RepeatingGameObject.draw').innerHTML='draw() <br/>';
		
		var e = document.createElement('a');
		e.setAttribute('id','RepeatingGameObject.drawRepeat');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'RepeatingGameObject.drawRepeat\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('RepeatingGameObject.drawRepeat').innerHTML='drawRepeat() <br/>';
		
	}else if(filename == "ResourceManager.js"){
		
		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);
		
		var e = document.createElement('a');
		e.setAttribute('id','ResourceManager.startupResourceManager');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'ResourceManager.startupResourceManager\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('ResourceManager.startupResourceManager').innerHTML='startupResourceManager() <br/>';
		
	}else if(filename == "VisualGameObject.js"){

		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

         ajaxcall(file);

		var e = document.createElement('a');
		e.setAttribute('id','VisualGameObject.draw');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'VisualGameObject.draw\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('VisualGameObject.draw').innerHTML='draw() <br/>';

		var e = document.createElement('a');
		e.setAttribute('id','VisualGameObject.startupVisualGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'VisualGameObject.startupVisualGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('VisualGameObject.startupVisualGameObject').innerHTML='startupVisualGameObject() <br/>';

		var e = document.createElement('a');
		e.setAttribute('id','VisualGameObject.shutdownVisualGameObject');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'VisualGameObject.shutdownVisualGameObject\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('VisualGameObject.shutdownVisualGameObject').innerHTML='shutdownVisualGameObject() <br/>';

		var e = document.createElement('a');
		e.setAttribute('id','VisualGameObject.shutdown');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'VisualGameObject.shutdown\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('VisualGameObject.shutdown').innerHTML='shutdown() <br/>';

		var e = document.createElement('a');
		e.setAttribute('id','VisualGameObject.collisionArea');
		e.setAttribute('href','#');
		e.setAttribute('onclick','showFunction(\'VisualGameObject.collisionArea\')');
		document.getElementById('functions').appendChild(e);
		document.getElementById('VisualGameObject.collisionArea').innerHTML='collisionArea() <br/>';

	}
    else if(filename == "Utils.js"){

		var nameoffile;
		clearOldFunction();

        if (window.XMLHttpRequest)
         {
           xhttp=new XMLHttpRequest();
         }
        else // Internet Explorer 5/6
         {
           xhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         nameoffile = "MainMenu/" + filename
         xhttp.open("GET",nameoffile,false);
         xhttp.send("");
         xmlDoc=xhttp.responseText;
        var myNode = graph.addNode(200, 200, /*defaultWidth*/ 180, /*defaultHeight*/ 80, false);
        myNode.setNodeName(escape(filename));
        myNode.txt.text(xmlDoc);

        if(filename.match(intRegex))
        {
         var file = filename.substr(0, filename.length-3);
        }
         var files = file + ".html";
         var filepath = "comp/" + files;
         $("#tab_4").load(filepath);

    }


    else {
		clearOldFunction();

	}
}

function showFunction(name){

	var xmlhttp;
	var params = "functionName="+name;
	
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
		document.getElementById('functionSourceCode').innerHTML= xmlhttp.responseText;
	}
  }
  	
	xmlhttp.open("POST","functions_view.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);
  
}

function clearOldFunction(){
	
		var functions = document.getElementById('functions');
		document.getElementById('functionsList').removeChild(functions);
		var newfunctions = document.createElement('div');
		newfunctions.setAttribute('id','functions');
		document.getElementById('functionsList').appendChild(newfunctions);

}

function fillData(variable){
	
	fillVarDeclared(variable);
		fillVarInit(variable);
		fillVarUsed(variable);
	
	if(variable == "fps"){
		
		
	
	} else if(variable == "sbf"){
		
		
		
	} else if(variable == "gom"){
		
		
		
	} else if(variable == "gam"){
		
		
		
	} else if(variable == "grm"){
		
		
		
	} else if(variable == "gsc"){
		
		
		
	} else if(variable == "gplayer"){
		
		
		
	}
	
}

function fillVarInit(variable){

	var xmlhttp;
	var params = "variableName="+variable;
	
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
		document.getElementById('variableInitialised').innerHTML=xmlhttp.responseText;
	}
  }
	
	xmlhttp.open("POST","variable_initialised.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);
	
}

function fillVarUsed(variable){
	
	var xmlhttp;
	var params = "variableName="+variable;
	
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
		document.getElementById('variableUsed').innerHTML=xmlhttp.responseText;
	}
  }
	
	xmlhttp.open("POST","variable_used.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);
	
}

function fillVarDeclared(variable){
	
	var xmlhttp;
	var params = "variableName="+variable;
	
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
		document.getElementById('variableDeclared').innerHTML=xmlhttp.responseText;
	}
  }
	
	xmlhttp.open("POST","variables_declared.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);
	
}

function showDetails(classname){
	
	highlightInheritance(classname);
	showInheritedFunctions(classname);
	showInheritedVariables(classname);
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

function showInheritedVariables(classname){
	
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
		document.getElementById('ivVariables').innerHTML= xmlhttp.responseText;
	}
  }
  	
	xmlhttp.open("POST","ivVariables.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(params);

}

function ajaxcall(filename)
{
    $.ajax({ url : '/SoftwareProjectVisualizer/variable_parser.php',
                data : {action: filename},
                type: 'post',
                success: function(data){
                  $("#tab_6").html(data);
                }
         });
}






/*var xmlhttp;
	var params = "filename="+filename;

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

	var response = Array();
	response.push(JSON.parse(xmlhttp.responseText));
	alert(response);
	
	for(var i=0;i<2;i++){
        alert(response[i]);
    }
    <?php /*?><?php ?><?php $myarray[0] = "one";
$myarray[1] = "two";
$myarray[2] = "three";
$myarray[3] = "four";
$myarray[4] = "five";
$myarray[5] = "six";?>;
	
	<?php foreach($myarray as $a){ ?>
	
	var newselect = document.createElement('a');
	newselect.setAttribute('id','<?=$a?>');
	newselect.setAttribute('onclick','showyou()');
	document.getElementById('functionsList').appendChild(newselect);
	document.getElementById('<?=$a?>').innerHTML='thokka';
	<?php } ?><?php ?><?php *//*?>
    }
  }
/*xmlhttp.open("POST","functions_view.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.setRequestHeader("Content-length", params.length);
xmlhttp.setRequestHeader("Connection", "close");
xmlhttp.send(params);*/