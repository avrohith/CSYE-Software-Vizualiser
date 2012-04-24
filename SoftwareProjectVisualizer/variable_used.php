<?php

$variableName = $_POST["variableName"];
$used = "";

if(strcasecmp($variableName,"fps")==0){
	
	$used = "Used in: AnimatedGameObject.js"."<br/>".
	"var SECONDS_BETWEEN_FRAMES = 1 / FPS;<br/>";

} else if(strcasecmp($variableName,"sbf")==0){
	
	$used = "Used in: GameObjectManager.js <br/> Statement: setInterval(function(){g_GameObjectManager.draw();}, SECONDS_BETWEEN_FRAMES);<br/>";

} else if(strcasecmp($variableName,"gom")==0){
	
	$used = "Used in: ApplicationManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_GameObjectManager.shutdownAll();"."<br/>".
	"g_GameObjectManager.shutdownAll();"."<br/>".
	"g_GameObjectManager.xScroll = 0;"."<br/>".
	"g_GameObjectManager.yScroll = 0;"."<br/>"."<br/>".
	"Used in: GameObject.js"."<br/>".
	"Statements: "."<br/>".
	"g_GameObjectManager.addGameObject(this);"."<br/>".
	"g_GameObjectManager.removeGameObject(this);"."<br/>"."<br/>".
	"Used in: GameObjectManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_GameObjectManager = this;"."<br/>".
	"document.onkeydown = function(event){g_GameObjectManager.keyDown(event);}"."<br/>".
	"document.onkeyup = function(event){g_GameObjectManager.keyUp(event);}"."<br/>".
	"setInterval(function(){g_GameObjectManager.draw();}, SECONDS_BETWEEN_FRAMES);"."<br/>"."<br/>".
	"Used in: Player.js"."<br/>".
	"Statements: "."<br/>".
	"g_GameObjectManager.xScroll = this.x - (context.canvas.width - this.frameWidth -  this.screenBorder);"."<br/>".
	"g_GameObjectManager.xScroll = this.x - this.screenBorder;"."<br/>";

} else if(strcasecmp($variableName,"gam")==0){
	
	$used = "Used in: ApplicationManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_ApplicationManager = this;"."<br/>"."<br/>".
	"Used in: LevelEndPost.js"."<br/>".
	"Statements: "."<br/>".
	"g_ApplicationManager.openMainMenu();"."<br/>"."<br/>".
	"Used in: MainMenu.js"."<br/>".
	"Statements: "."<br/>".
	" g_ApplicationManager.startLevel();"."<br/>"."<br/>".
	"Used in: Powerup.js"."<br/>".
	"Statements: "."<br/>".
	"g_ApplicationManager.updateScore();";

} else if(strcasecmp($variableName,"grm")==0){
	
	$used = "Used in: ApplicationManager.js"."<br/>".
	"Statements: "."<br/>".
	"this.background3 = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background2, 0, 100, 3, 600, 320, 0.75);"."<br/>".
	"this.background2 = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background1, 0, 100, 2, 600, 320, 0.5);"."<br/>".
	"this.background = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background0, 0, 0, 1, 600, 320, 0.25);"."<br/>"."<br/>".
	"Used in: GameObjectManager.js"."<br/>".
	"Statements: "."<br/>".
	"for (i = 0; i < g_ResourceManager.imageProperties.length; ++i)"."<br/>".
	"if (g_ResourceManager[g_ResourceManager.imageProperties[i]].complete)"."<br/>".
	"if ( numLoaded == g_ResourceManager.imageProperties.length )"."<br/>"."<br/>".
	"Used in: Level.js"."<br/>".
	"Statements: "."<br/>".
	"new VisualGameObject().startupVisualGameObject(g_ResourceManager.block, x * this.blockWidth, canvasHeight - (y + 1) * this.blockHeight, 4);"."<br/>".
	"case 'Gem':
                        new Powerup().startupPowerup(10, g_ResourceManager.gem, xPosition - g_ResourceManager.gem.width / 2, yPosition - g_ResourceManager.gem.height, 4, 1, 1);"."<br/>".
	"case 'LevelEndPost':
                        new LevelEndPost().startupLevelEndPost(g_ResourceManager.portal, xPosition - g_ResourceManager.portal.width / 2 / 4, yPosition - g_ResourceManager.portal.height, 4);"."<br/>"."<br/>".
	"Used in: MainMenu.js"."<br/>".
	"Statements: "."<br/>".
	"this.startupVisualGameObject(g_ResourceManager.mainmenu, 0, 0, 1);"."<br/>"."<br/>".
	"Used in: Player.js"."<br/>".
	"Statements: "."<br/>".
	"this.startupAnimatedGameObject(g_ResourceManager.idleLeft, 300, 400 - 48 - 48, 4, 6, 20);"."<br/>".
	"this.setAnimation(g_ResourceManager.idleLeft, 6, 20);"."<br/>".
	"this.setAnimation(g_ResourceManager.idleRight, 6, 20);"."<br/>".
	"if (this.right && this.left)
            this.setAnimation(g_ResourceManager.idleLeft, 6, 20);
        else if (this.right)
            this.setAnimation(g_ResourceManager.runRight, 12, 20);
        else if (this.left)
            this.setAnimation(g_ResourceManager.runLeft, 12, 20);"."<br/>"."<br/>".
	"Used in: ResourceManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_ResourceManager = this;"."<br/>".
	"";

} else if(strcasecmp($variableName,"gsc")==0){
	
	$used = "Used in: ApplicationManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_score = 0;"."<br/>".
	"score.innerHTML = String(g_score);"."<br/>"."<br/>".
	"Used in: Powerup.js"."<br/>".
	"Statements: "."<br/>".
	"g_score += this.value;"."<br/>";

} else if(strcasecmp($variableName,"gplayer")==0){
	
	$used = "Used in: ApplicationManager.js"."<br/>".
	"Statements: "."<br/>".
	"g_player = new Player().startupPlayer(this.level);"."<br/>"."<br/>".
	"Used in: Powerup.js"."<br/>".
	"Statements: "."<br/>".
	"if (this.collisionArea().intersects(g_player.collisionArea()))"."<br/>";

}

echo $used;

?>