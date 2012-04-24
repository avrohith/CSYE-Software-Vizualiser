<?php

$functionName = $_POST["functionName"];
$functionContent = "";

if(strcasecmp($functionName,"AnimatedGameObject.startupAnimatedGameObject")==0){

	$functionContent = " this.startupAnimatedGameObject = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z, /**Number*/ frameCount, /**Number*/ fps)"."<br/>"."
    {"."<br/>"."
        if (frameCount <= 0) throw 'framecount can not be <= 0';"."<br/>"."
        if (fps <= 0) throw 'fps can not be <= 0'"."<br/>"."
		"."<br/>"."
        this.startupVisualGameObject(image, x, y, z);"."<br/>"."
        this.currentFrame = 0;"."<br/>"."
        this.frameCount = frameCount;"."<br/>"."
        this.timeBetweenFrames = 1/fps;"."<br/>"."
        this.timeSinceLastFrame = this.timeBetweenFrames;"."<br/>"."
        this.frameWidth = this.image.width / this.frameCount;"."<br/>"."
		"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
";
}else if(strcasecmp($functionName,"AnimatedGameObject.setAnimation")==0){

	$functionContent = "this.setAnimation = function(/**Image*/ image, /**Number*/ frameCount, /**Number*/ fps)"."<br/>"."
    {"."<br/>"."
        if (frameCount <= 0) throw 'framecount can not be <= 0';"."<br/>"."
        if (fps <= 0) throw 'fps can not be <= 0'"."<br/>"."
		"."<br/>"."
        this.image = image;"."<br/>"."
        this.currentFrame = 0;"."<br/>"."
        this.frameCount = frameCount;"."<br/>"."
        this.timeBetweenFrames = 1/fps;"."<br/>"."
        this.timeSinceLastFrame = this.timeBetweenFrames;"."<br/>"."
        this.frameWidth = this.image.width / this.frameCount;"."<br/>"."
    }"."<br/>"."";

} else if(strcasecmp($functionName,"AnimatedGameObject.draw")==0){
	
	$functionContent = "this.draw = function(/**Number*/ dt, /**CanvasRenderingContext2D*/ context, /**Number*/ xScroll, /**Number*/ yScroll)"."<br/>"."
    {"."<br/>"."
        var sourceX = this.frameWidth * this.currentFrame;"."<br/>"."
        context.drawImage(this.image, sourceX, 0, this.frameWidth, this.image.height, this.x - xScroll, this.y - yScroll, this.frameWidth, this.image.height);"."<br/>"."
"."<br/>"."
        this.timeSinceLastFrame -= dt;"."<br/>"."
        if (this.timeSinceLastFrame <= 0)"."<br/>"."
        {"."<br/>"."
           this.timeSinceLastFrame = this.timeBetweenFrames;"."<br/>"."
           ++this.currentFrame;"."<br/>"."
           this.currentFrame %= this.frameCount;"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"AnimatedGameObject.shutdownAnimatedGameObject")==0){

	$functionContent = "this.shutdownAnimatedGameObject = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownVisualGameObject();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"AnimatedGameObject.shutdown")==0){
	
	$functionContent = "this.shutdown = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownAnimatedGameObject();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"AnimatedGameObject.collisionArea")==0){
	
	$functionContent = "this.collisionArea = function()"."<br/>"."
    {"."<br/>"."
        return new Rectangle().startupRectangle(this.x, this.y, this.frameWidth, this.image.height);"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"ApplicationManager.startupApplicationManager")==0){

	$functionContent = "this.startupApplicationManager = function(canvasWidth, canvasHeight)"."<br/>"."
    {"."<br/>"."
        g_ApplicationManager = this;"."<br/>"."
        this.canvasWidth = canvasWidth;"."<br/>"."
        this.canvasHeight = canvasHeight;"."<br/>"."
"."<br/>"."
        this.openMainMenu();"."<br/>"."
"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"ApplicationManager.startLevel")==0){
	
	$functionContent = "this.startLevel = function()"."<br/>"."
    {"."<br/>"."
        g_GameObjectManager.shutdownAll();"."<br/>"."
        this.level = new Level().startupLevel(this.canvasWidth, this.canvasHeight);"."<br/>"."
        this.background3 = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background2, 0, 100, 3, 600, 320, 0.75);"."<br/>"."
        this.background2 = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background1, 0, 100, 2, 600, 320, 0.5);"."<br/>"."
        this.background = new RepeatingGameObject().startupRepeatingGameObject(g_ResourceManager.background0, 0, 0, 1, 600, 320, 0.25);"."<br/>"."
        g_player = new Player().startupPlayer(this.level);"."<br/>"."
        this.updateScore();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"ApplicationManager.openMainMenu")==0){
	
	$functionContent = "this.openMainMenu = function()"."<br/>"."
    {"."<br/>"."
        g_GameObjectManager.shutdownAll();"."<br/>"."
        g_GameObjectManager.xScroll = 0;"."<br/>"."
        g_GameObjectManager.yScroll = 0;"."<br/>"."
        g_score = 0;"."<br/>"."
        this.mainMenu = new MainMenu().startupMainMenu();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"ApplicationManager.updateScore")==0){
	
	$functionContent= "this.updateScore = function()"."<br/>"."
    {"."<br/>"."
        var score = document.getElementById(\"Score\");"."<br/>"."
        score.innerHTML = String(g_score);"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObject.startupGameObject")==0){
	
	$functionContent = "this.startupGameObject = function(/**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {"."<br/>"."
        this.zOrder = z;"."<br/>"."
        this.x = x;"."<br/>"."
        this.y = y;"."<br/>"."
        g_GameObjectManager.addGameObject(this);"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObject.shutdownGameObject")==0){
	
	$functionContent = "this.shutdownGameObject = function()"."<br/>"."
    {"."<br/>"."
        g_GameObjectManager.removeGameObject(this);"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObject.shutdown")==0){
	
	$functionContent = "this.shutdown = function()"."<br/>"."
    {"."<br/>"."
         this.shutdownGameObject();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.startupGameObjectManager")==0){
	
	$functionContent = "this.startupGameObjectManager = function()"."<br/>"."
    {"."<br/>"."
        // set the global pointer to reference this object"."<br/>"."
        g_GameObjectManager = this;"."<br/>"."
"."<br/>"."
        // watch for keyboard events"."<br/>"."
        document.onkeydown = function(event){g_GameObjectManager.keyDown(event);}"."<br/>"."
        document.onkeyup = function(event){g_GameObjectManager.keyUp(event);}"."<br/>"."
"."<br/>"."
        // get references to the canvas elements and their 2D contexts"."<br/>"."
        this.canvas = document.getElementById('canvas');"."<br/>"."
"."<br/>"."
        // if the this.canvas.getContext function does not exist it is a safe bet that"."<br/>"."
        // the current browser does not support the canvas element."."<br/>"."
        // in this case we don't go any further, which will save some debuggers (like"."<br/>"."
        // the IE8 debugger) from throwing up a lot of errors."."<br/>"."
        if (this.canvas.getContext)"."<br/>"."
        {"."<br/>"."
            this.canvasSupported = true;"."<br/>"."
            this.context2D = this.canvas.getContext('2d');"."<br/>"."
            this.backBuffer = document.createElement('canvas');"."<br/>"."
            this.backBuffer.width = this.canvas.width;"."<br/>"."
            this.backBuffer.height = this.canvas.height;"."<br/>"."
            this.backBufferContext2D = this.backBuffer.getContext('2d');"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        // create a new ResourceManager"."<br/>"."
        new ResourceManager().startupResourceManager("."<br/>"."
            [{name: 'runLeft', src: 'run_left.png'},"."<br/>"."
            {name: 'runRight', src: 'run_right.png'},"."<br/>"."
            {name: 'idleLeft', src: 'idle_left.png'},"."<br/>"."
            {name: 'idleRight', src: 'idle_right.png'},"."<br/>"."
            {name: 'background0', src: 'jsplatformer4_b0.png'},"."<br/>"."
            {name: 'background1', src: 'jsplatformer4_b1.png'},"."<br/>"."
            {name: 'background2', src: 'jsplatformer4_b2.png'},"."<br/>"."
            {name: 'block', src: 'BlockA0.png'},"."<br/>"."
            {name: 'gem', src: 'Gem.png'},"."<br/>"."
            {name: 'mainmenu', src: 'mainmenu.png'},"."<br/>"."
            {name: 'portal', src: 'portal.png'}]);"."<br/>"."
"."<br/>"."
        // use setInterval to call the draw function"."<br/>"."
        setInterval(function(){g_GameObjectManager.draw();}, SECONDS_BETWEEN_FRAMES);"."<br/>"."
        "."<br/>"."
        return this; "."<br/>"."      
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.draw")==0){
	
	$functionContent = "this.draw = function ()"."<br/>"."
    {"."<br/>"."
        // calculate the time since the last frame"."<br/>"."
        var thisFrame = new Date().getTime();"."<br/>"."
        var dt = (thisFrame - this.lastFrame)/1000;"."<br/>"."
        this.lastFrame = thisFrame;"."<br/>"."
"."<br/>"."
        if (!this.resourcesLoaded)"."<br/>"."
        {"."<br/>"."
            var numLoaded = 0;"."<br/>"."
            for (i = 0; i < g_ResourceManager.imageProperties.length; ++i)"."<br/>"."
            {"."<br/>"."
                if (g_ResourceManager[g_ResourceManager.imageProperties[i]].complete)"."<br/>"."
                {"."<br/>"."
                    ++numLoaded;"."<br/>"."
                }"."<br/>"."
            }"."<br/>"."
            if ( numLoaded == g_ResourceManager.imageProperties.length )"."<br/>"."
            {"."<br/>"."
                // create a new ApplicationManager"."<br/>"."
                new ApplicationManager().startupApplicationManager(this.canvas.width, this.canvas.height);"."<br/>"."
                this.resourcesLoaded = true;"."<br/>"."
            }"."<br/>"."
            else"."<br/>"."
            {"."<br/>"."
                this.loadingScreenCol += this.loadingScreenColDirection * this.loadingScreenColSpeed * dt;"."<br/>"."
                if (this.loadingScreenCol > 255)"."<br/>"."
                {"."<br/>"."
                    this.loadingScreenCol = 255;"."<br/>"."
                    this.loadingScreenColDirection = -1;"."<br/>"."
                }"."<br/>"."
                else if (this.loadingScreenCol < 0)"."<br/>"."
                {"."<br/>"."
                    this.loadingScreenCol = 0;"."<br/>"."
                    this.loadingScreenColDirection = 1;"."<br/>"."
                }"."<br/>"."
                this.context2D.fillStyle = \"rgb(\" + parseInt(this.loadingScreenCol) + \",\" + parseInt(this.loadingScreenCol) + \",\" + parseInt(this.loadingScreenCol) + \")\";"."<br/>"."
                this.context2D.fillRect (0, 0, this.canvas.width, this.canvas.height);"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
        "."<br/>"."
        // clear the drawing contexts"."<br/>"."
        if (this.canvasSupported && this.resourcesLoaded)"."<br/>"."
        {"."<br/>"."
            this.backBufferContext2D.clearRect(0, 0, this.backBuffer.width, this.backBuffer.height);"."<br/>"."
"."<br/>"."
            this.addNewGameObjects();"."<br/>"."
            this.removeOldGameObjects();"."<br/>"."
        "."<br/>"."
            // first update all the game objects"."<br/>"."
            for (var x = 0; x < this.gameObjects.length; ++x)"."<br/>"."
            {"."<br/>"."
                if (this.gameObjects[x].update)"."<br/>"."
                {
                    this.gameObjects[x].update(dt, this.backBufferContext2D, this.xScroll, this.yScroll);"."<br/>"."
                }"."<br/>"."
            }"."<br/>"."
"."<br/>"."
            // then draw the game objects"."<br/>"."
            for (var x = 0; x < this.gameObjects.length; ++x)"."<br/>"."
            {"."<br/>"."
                if (this.gameObjects[x].draw)"."<br/>"."
                {"."<br/>"."
                    this.gameObjects[x].draw(dt, this.backBufferContext2D, this.xScroll, this.yScroll);"."<br/>"."
                }"."<br/>"."
            }"."<br/>"."
"."<br/>"."
            // copy the back buffer to the displayed canvas"."<br/>"."
            this.context2D.drawImage(this.backBuffer, 0, 0);"."<br/>"."
        } "."<br/>"."       
    };"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.shutdownAll")==0){
	
	$functionContent = "this.shutdownAll = function()"."<br/>"."
    {"."<br/>"."
        for (var x = 0; x < this.gameObjects.length; ++x)"."<br/>"."
        {"."<br/>"."
            if (this.gameObjects[x].shutdown)"."<br/>"."
            {"."<br/>"."
                this.gameObjects[x].shutdown();"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        this.removeOldGameObjects();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.addGameObject")==0){
	
	$functionContent = "this.addGameObject = function(gameObject)"."<br/>"."
    {"."<br/>"."
        this.addedGameObjects.push(gameObject);"."<br/>"."
    };"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.addNewGameObjects")==0){
	
	$functionContent = "this.addNewGameObjects = function()"."<br/>"."
    {"."<br/>"."
        if (this.addedGameObjects.length != 0)"."<br/>"."
        {"."<br/>"."
            for (var x = 0; x < this.addedGameObjects.length; ++x)"."<br/>"."
            {"."<br/>"."
                this.gameObjects.push(this.addedGameObjects[x]);"."<br/>"."
            }"."<br/>"."
"."<br/>"."
            this.addedGameObjects.clear();"."<br/>"."
            this.gameObjects.sort(function(a,b){return a.zOrder - b.zOrder;});"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.removeGameObject")==0){
	
	$functionContent = " this.removeGameObject = function(gameObject)"."<br/>"."
    {"."<br/>"."
        this.removedGameObjects.push(gameObject);"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.removeOldGameObjects")==0){
	
	$functionContent = "this.removeOldGameObjects = function()"."<br/>"."
    {"."<br/>"."
        if (this.removedGameObjects.length != 0)"."<br/>"."
        {"."<br/>"."
            for (var x = 0; x < this.removedGameObjects.length; ++x)"."<br/>"."
            {"."<br/>"."
                this.gameObjects.removeObject(this.removedGameObjects[x]);"."<br/>"."
            }"."<br/>"."
            this.removedGameObjects.clear();"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.keyDown")==0){
	
	$functionContent = "this.keyDown = function(event)"."<br/>"."
    {"."<br/>"."
        for (var x = 0; x < this.gameObjects.length; ++x)"."<br/>"."
        {"."<br/>"."
            if (this.gameObjects[x].keyDown)"."<br/>"."
            {"."<br/>"."
                this.gameObjects[x].keyDown(event);"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"GameObjectManager.keyUp")==0){
	
	$functionContent= "this.keyUp = function(event)"."<br/>"."
    {"."<br/>"."
        for (var x = 0; x < this.gameObjects.length; ++x)"."<br/>"."
        {"."<br/>"."
            if (this.gameObjects[x].keyUp)"."<br/>"."
            {"."<br/>"."
                this.gameObjects[x].keyUp(event);"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Level.startupLevel")==0){
	
	$functionContent = " this.startupLevel = function(canvasWidth, canvasHeight)"."<br/>"."
    {"."<br/>"."
        this.blocks[0] = 3;"."<br/>"."
        this.blocks[1] = 2;"."<br/>"."
        this.blocks[2] = 1;"."<br/>"."
        this.blocks[3] = 1;"."<br/>"."
        this.blocks[4] = 1;"."<br/>"."
        this.blocks[5] = 1;"."<br/>"."
        this.blocks[6] = 2;"."<br/>"."
        this.blocks[7] = 3;"."<br/>"."
        this.blocks[8] = 2;"."<br/>"."
        this.blocks[9] = 1;"."<br/>"."
        this.blocks[10] = 2;"."<br/>"."
        this.blocks[11] = 3;"."<br/>"."
        this.blocks[12] = 4;"."<br/>"."
        this.blocks[13] = 5;"."<br/>"."
        this.blocks[14] = 4;"."<br/>"."
        this.blocks[15] = 3;"."<br/>"."
"."<br/>"."
        this.powerups['1'] = 'Gem';"."<br/>"."
        this.powerups['6'] = 'Gem';"."<br/>"."
        this.powerups['10'] = 'Gem';"."<br/>"."
        this.powerups['14'] = 'LevelEndPost';"."<br/>"."
"."<br/>"."
        this.addBlocks(canvasWidth, canvasHeight);"."<br/>"."
        this.addPowerups(canvasWidth, canvasHeight);"."<br/>"."
"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Level.addBlocks")==0){
	
	$functionContent = "this.addBlocks = function(canvasWidth, canvasHeight)"."<br/>"."
    {"."<br/>"."
        for (var x = 0; x < this.blocks.length; ++x)"."<br/>"."
        {"."<br/>"."
            for (var y = 0; y < this.blocks[x]; ++y)"."<br/>"."
            {"."<br/>"."
                new VisualGameObject().startupVisualGameObject(g_ResourceManager.block, x * this.blockWidth, canvasHeight - (y + 1) * this.blockHeight, 4);"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Level.addPowerups")==0){
	
	$functionContent = "this.addPowerups = function(canvasWidth, canvasHeight)"."<br/>"."
    {"."<br/>"."
        for (var x = 0; x < this.blocks.length; ++x)"."<br/>"."
        {"."<br/>"."
            if (this.powerups[x])"."<br/>"."
            {"."<br/>"."
                var xPosition = x * this.blockWidth + this.blockWidth / 2;"."<br/>"."
                var yPosition = canvasHeight - this.groundHeight(x);"."<br/>"."
"."<br/>"."
                switch(this.powerups[x])"."<br/>"."
                 {"."<br/>"."
                    case 'Gem':"."<br/>"."
                        new Powerup().startupPowerup(10, g_ResourceManager.gem, xPosition - g_ResourceManager.gem.width / 2, yPosition - g_ResourceManager.gem.height, 4, 1, 1);"."<br/>"."
                        break;"."<br/>"."
                    case 'LevelEndPost':"."<br/>"."
                        new LevelEndPost().startupLevelEndPost(g_ResourceManager.portal, xPosition - g_ResourceManager.portal.width / 2 / 4, yPosition - g_ResourceManager.portal.height, 4);"."<br/>"."
                        break;"."<br/>"."
                 }"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Level.currentBlock")==0){
	
	$functionContent = "this.currentBlock = function(x)"."<br/>"."
    {"."<br/>"."
        return parseInt( x / this.blockWidth);"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Level.groundHeight")==0){
	
	$functionContent = "this.groundHeight = function(blockIndex)"."<br/>"."
    {"."<br/>"."
        if (blockIndex < 0 || blockIndex > this.blocks.length) return 0;"."<br/>"."
"."<br/>"."
        return this.blocks[blockIndex] *  this.blockHeight;"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"LevelEndPost.startupLevelEndPost")==0){
	
	$functionContent = " this.startupLevelEndPost = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {"."<br/>"."
        this.startupAnimatedGameObject(image, x, y, z, 4, 10);"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"LevelEndPost.shutdown")==0){
	
	$functionContent = "this.shutdown = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownLevelEndPost();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"LevelEndPost.shutdownLevelEndPost")==0){
	
	$functionContent = "this.shutdownLevelEndPost = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownAnimatedGameObject();"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"LevelEndPost.update")==0){
	
	$functionContent = "this.update = function (/**Number*/ dt, /**CanvasRenderingContext2D*/context, /**Number*/ xScroll, /**Number*/ yScroll)"."<br/>"."
    {"."<br/>"."
        if (this.collisionArea().intersects(g_player.collisionArea()))"."<br/>"."
        {"."<br/>"."
            g_ApplicationManager.openMainMenu();"."<br/>"."
            this.shutdown();   "."<br/>"."         
        }"."<br/>"."
    }"."<br/>";

} else if(strcasecmp($functionName,"Main.init")==0){
	
	$functionContent = "function init()"."<br/>"."
{"."<br/>"."
    new GameObjectManager().startupGameObjectManager"."<br/>"."
}"."<br/>";

}  else if(strcasecmp($functionName,"MainMenu.startupMainMenu")==0){
	
	$functionContent = "this.startupMainMenu = function"."<br/>"."
    {"."<br/>"."
        this.startupVisualGameObject(g_ResourceManager.mainmenu, 0, 0, 1);"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"MainMenu.keyDown")==0){
	
	$functionContent = "this.keyDown = function(event)"."<br/>"."
    {"."<br/>"."
        g_ApplicationManager.startLevel();"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Player.startupPlayer")==0){
	
	$functionContent = "this.startupPlayer = function(level)"."<br/>"."
    {"."<br/>"."
        this.startupAnimatedGameObject(g_ResourceManager.idleLeft, 300, 400 - 48 - 48, 4, 6, 20);"."<br/>"."
        this.level = level;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Player.keyDown")==0){
	
	$functionContent = "this.keyDown = function(event)"."<br/>"."
    {"."<br/>"."
        var updateRequired = false;"."<br/>"."
"."<br/>"."
        // left"."<br/>"."
        if (event.keyCode == 37 && !this.left)"."<br/>"."
        {"."<br/>"."
            this.left = true;"."<br/>"."
            updateRequired = true;"."<br/>"."
        }"."<br/>"."
        // right"."<br/>"."
        if (event.keyCode == 39 && !this.right)"."<br/>"."
        {"."<br/>"."
            this.right = true;"."<br/>"."
            updateRequired = true;"."<br/>"."
        }"."<br/>"."
        if (event.keyCode == 32 && this.grounded)"."<br/>"."
        {"."<br/>"."
            this.grounded = false;"."<br/>"."
            this.jumpSinWavePos = 0;"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        if (updateRequired)"."<br/>"."
            this.updateAnimation();"."<br/>"."
"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Player.keyUp")==0){
	
	$functionContent = "this.keyUp = function(event)"."<br/>"."
    {"."<br/>"."
        // left"."<br/>"."
        if (event.keyCode == 37)"."<br/>"."
        {"."<br/>"."
            this.left = false;"."<br/>"."
            this.setAnimation(g_ResourceManager.idleLeft, 6, 20);"."<br/>"."
        }"."<br/>"."
        // right"."<br/>"."
        if (event.keyCode == 39)"."<br/>"."
        {"."<br/>"."
            this.right = false;"."<br/>"."
            this.setAnimation(g_ResourceManager.idleRight, 6, 20);"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        this.updateAnimation();"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Player.updateAnimation")==0){
	
	$functionContent = "this.updateAnimation = function()"."<br/>"."
    {"."<br/>"."
       if (this.right && this.left)"."<br/>"."
            this.setAnimation(g_ResourceManager.idleLeft, 6, 20);"."<br/>"."
        else if (this.right)"."<br/>"."
            this.setAnimation(g_ResourceManager.runRight, 12, 20);"."<br/>"."
        else if (this.left)"."<br/>"."
            this.setAnimation(g_ResourceManager.runLeft, 12, 20);"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Player.update")==0){
	
	$functionContent = "this.update = function (/**Number*/ dt, /**CanvasRenderingContext2D*/context, /**Number*/ xScroll, /**Number*/ yScroll)"."<br/>"."
    {"."<br/>"."
        if (this.left)"."<br/>"."
            this.x -= this.speed * dt;"."<br/>"."
        if (this.right)"."<br/>"."
            this.x += this.speed * dt;"."<br/>"."
"."<br/>"."
        // XOR operation (JavaScript does not have a native XOR operator)"."<br/>"."
        // only test for a collision if the player is moving left or right (and not trying to do both at"."<br/>"."
        // the same time)"."<br/>"."
        if ((this.right || this.left) && !(this.left && this.right))"."<br/>"."
        {"."<br/>"."
            // this will be true until the player is no longer colliding"."<br/>"."
            var collision = false;"."<br/>"."
            // the player may have to be pushed back through several block stacks (especially if the"."<br/>"."
            // frame rate is very slow)"."<br/>"."
            do"."<br/>"."
            {"."<br/>"."
                // the current position of the player (test the left side if running left"."<br/>"."
                // and the right side if running right)"."<br/>"."
                var xPos = this.left ? this.x : this.x + this.frameWidth;"."<br/>"."
                // the index of stack of blocks that the player is standing on/in"."<br/>"."
                var currentBlock = this.level.currentBlock(xPos);"."<br/>"."
                // the height of the stack of blocks that the player is standing on/in"."<br/>"."
                var groundHeight = this.level.groundHeight(currentBlock);"."<br/>"."
                // the height of the player (we need the height from the ground up,"."<br/>"."
                // whereas the this.y value represents the position of the player"."<br/>"."
                // from the \"sky\" down)."."<br/>"."
                var playerHeight = context.canvas.height - (this.y + this.image.height);"."<br/>"."
                // if the player is not higher than the stack of blocks, it must be colliding"."<br/>"."
                if (playerHeight  < groundHeight)"."<br/>"."
                {"."<br/>"."
                    collision = true;"."<br/>"."
                    // we are moving right, so push the player left"."<br/>"."
                    if (this.right)"."<br/>"."
                        this.x = this.level.blockWidth * currentBlock - this.frameWidth - 1;"."<br/>"."
                    // we are moving left, push the player right"."<br/>"."
                    else"."<br/>"."
                        this.x = this.level.blockWidth * (currentBlock + 1);"."<br/>"."
                }"."<br/>"."
                else"."<br/>"."
                {"."<br/>"."
                    collision = false;"."<br/>"."
                }"."<br/>"."
            }  while (collision)"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        // keep the player bound to the level"."<br/>"."
        if (this.x > this.level.blocks.length * this.level.blockWidth - this.frameWidth - 1)"."<br/>"."
            this.x = this.level.blocks.length * this.level.blockWidth - this.frameWidth - 1;"."<br/>"."
        if (this.x > context.canvas.width - this.frameWidth + xScroll -  this.screenBorder)"."<br/>"."
            g_GameObjectManager.xScroll = this.x - (context.canvas.width - this.frameWidth -  this.screenBorder);"."<br/>"."
        // modify the xScroll value to keep the player on the screen"."<br/>"."
        if (this.x < 0)"."<br/>"."
            this.x = 0;"."<br/>"."
        if (this.x -  this.screenBorder < xScroll)"."<br/>"."
            g_GameObjectManager.xScroll = this.x - this.screenBorder;"."<br/>"."
"."<br/>"."
        // if the player is jumping or falling, move along the sine wave"."<br/>"."
        if (!this.grounded)"."<br/>"."
        {"."<br/>"."
            // the last position on the sine wave"."<br/>"."
            var lastHeight = this.jumpSinWavePos;"."<br/>"."
            // the new position on the sine wave"."<br/>"."
            this.jumpSinWavePos += this.jumpSinWaveSpeed * dt;"."<br/>"."
"."<br/>"."
            // we have fallen off the bottom of the sine wave, so continue falling"."<br/>"."
            // at a predetermined speed"."<br/>"."
            if (this.jumpSinWavePos >= Math.PI)"."<br/>"."
                 this.y += this.jumpHeight / this.jumpHangTime * this.fallMultiplyer * dt;"."<br/>"."
            // otherwise move along the sine wave"."<br/>"."
            else"."<br/>"."
                this.y -= (Math.sin(this.jumpSinWavePos) - Math.sin(lastHeight)) * this.jumpHeight;"."<br/>"."
        }"."<br/>"."
"."<br/>"."
        // now that the player has had it's y position changed we need to check for a collision"."<br/>"."
        // with the ground below the player. we have to check both the players left and right sides"."<br/>"."
        // for a collision with the ground"."<br/>"."
"."<br/>"."
        // left side"."<br/>"."
        var currentBlock1 = this.level.currentBlock(this.x);"."<br/>"."
        // right side
        var currentBlock2 = this.level.currentBlock(this.x + this.frameWidth);"."<br/>"."
        // ground height below the left side"."<br/>"."
        var groundHeight1 = this.level.groundHeight(currentBlock1);"."<br/>"."
        // ground height below the right side"."<br/>"."
        var groundHeight2 = this.level.groundHeight(currentBlock2);"."<br/>"."
        // the heighest point under the player"."<br/>"."
        var maxGroundHeight = groundHeight1 > groundHeight2 ? groundHeight1 : groundHeight2;"."<br/>"."
        // the players height (relaitive to the bottom of the screen)"."<br/>"."
        var playerHeight = context.canvas.height - (this.y + this.image.height);"."<br/>"."
"."<br/>"."
        // we have hit the ground"."<br/>"."
        if (maxGroundHeight >= playerHeight)"."<br/>"."
        {"."<br/>"."
            this.y = context.canvas.height - maxGroundHeight - this.image.height;"."<br/>"."
            this.grounded = true;"."<br/>"."
            this.jumpSinWavePos = 0;"."<br/>"."
        }"."<br/>"."
        // otherwise we are falling"."<br/>"."
        else if (this.grounded)"."<br/>"."
        {"."<br/>"."
            this.grounded = false;"."<br/>"."
            // starting falling down the sine wave (i.e. from the top)"."<br/>"."
            this.jumpSinWavePos = this.halfPI;"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Powerup.startupPowerup")==0){
	
	$functionContent = "this.startupPowerup = function(/**Number*/ value, /**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z, /**Number*/ frameCount, /**Number*/ fps)"."<br/>"."
    {"."<br/>"."
        this.startupAnimatedGameObject(image, x, y - this.bounceHeight, z, frameCount, fps);"."<br/>"."
        this.value = value;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Powerup.shutdownPowerup")==0){
	
	$functionContent = "this.shutdownPowerup = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownAnimatedGameObject();"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Powerup.shutdown")==0){
	
	$functionContent = "this.shutdown = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownPowerup();"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Powerup.update")==0){
	
	$functionContent = "this.update = function (/**Number*/ dt, /**CanvasRenderingContext2D*/context, /**Number*/ xScroll, /**Number*/ yScroll)"."<br/>"."
    {"."<br/>"."
        var lastSineWavePos = this.sineWavePos;"."<br/>"."
        this.sineWavePos += this.bounceSpeed * dt;"."<br/>"."
        this.y += (Math.sin(this.sineWavePos) - Math.sin(lastSineWavePos)) * this.bounceHeight;"."<br/>"."
"."<br/>"."
        if (this.collisionArea().intersects(g_player.collisionArea()))"."<br/>"."
        {"."<br/>"."
            this.shutdown();"."<br/>"."
            g_score += this.value;"."<br/>"."
            g_ApplicationManager.updateScore();"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Rectangle.startupRectangle")==0){
	
	$functionContent = "this.startupRectangle = function(/**Number*/ left, /**Number*/ top, /**Number*/ width, /**Number*/ height)"."<br/>"."
    {"."<br/>"."
        this.left = left;"."<br/>"."
        this.top = top;"."<br/>"."
        this.width = width;"."<br/>"."
        this.height = height;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"Rectangle.intersects")==0){
	
	$functionContent = "this.intersects = function(/**Rectangle*/ other)"."<br/>"."
    {"."<br/>"."
        if (this.left + this.width < other.left)"."<br/>"."
            return false;"."<br/>"."
        if (this.top + this.height < other.top)"."<br/>"."
            return false;"."<br/>"."
        if (this.left > other.left + other.width)"."<br/>"."
            return false;"."<br/>"."
        if (this.top > other.top + other.height)"."<br/>"."
            return false;"."<br/>"."
"."<br/>"."
        return true;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"RepeatingGameObject.startupRepeatingGameObject")==0){
	
	$functionContent = "this.startupRepeatingGameObject = function(image, x, y, z, width, height, scrollFactor)"."<br/>"."
    {"."<br/>"."
        this.startupVisualGameObject(image, x, y, z);"."<br/>"."
        this.width = width;"."<br/>"."
        this.height = height;"."<br/>"."
        this.scrollFactor = scrollFactor;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"RepeatingGameObject.shutdownstartupRepeatingGameObject")==0){
	
	$functionContent = "this.shutdownstartupRepeatingGameObject = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownVisualGameObject();"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"RepeatingGameObject.draw")==0){
	
	$functionContent = "this.draw = function(dt, canvas, xScroll, yScroll)"."<br/>"."
    {"."<br/>"."
        var areaDrawn = [0, 0];"."<br/>"."
        "."<br/>"."
        for (var y = 0; y < this.height; y += areaDrawn[1])"."<br/>"."
        {"."<br/>"."
            for (var x = 0; x < this.width; x += areaDrawn[0])"."<br/>"."
            {"."<br/>"."
                // the top left corner to start drawing the next tile from"."<br/>"."
				var newPosition = [this.x + x, this.y + y];"."<br/>"."
				// the amount of space left in which to draw"."<br/>"."
                var newFillArea = [this.width - x, this.height - y];"."<br/>"."
				// the first time around you have to start drawing from the middle of the image"."<br/>"."
				// subsequent tiles alwyas get drawn from the top or left"."<br/>"."
                var newScrollPosition = [0, 0];"."<br/>"."
                if (x==0) newScrollPosition[0] = xScroll * this.scrollFactor;"."<br/>"."
                if (y==0) newScrollPosition[1] = yScroll * this.scrollFactor;"."<br/>"."
                areaDrawn = this.drawRepeat(canvas, newPosition, newFillArea, newScrollPosition);"."<br/>"."
            }"."<br/>"."
        }"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"RepeatingGameObject.drawRepeat")==0){
	
	$functionContent = "this.drawRepeat = function(canvas, newPosition, newFillArea, newScrollPosition)"."<br/>"."
    {"."<br/>"."
        // find where in our repeating texture to start drawing (the top left corner)"."<br/>"."
        var xOffset = Math.abs(newScrollPosition[0]) % this.image.width;"."<br/>"."
        var yOffset = Math.abs(newScrollPosition[1]) % this.image.height;"."<br/>"."
        var left = newScrollPosition[0]<0?this.image.width-xOffset:xOffset;"."<br/>"."
        var top = newScrollPosition[1]<0?this.image.height-yOffset:yOffset;"."<br/>"."
        var width = newFillArea[0] < this.image.width-left?newFillArea[0]:this.image.width-left;"."<br/>"."
        var height = newFillArea[1] < this.image.height-top?newFillArea[1]:this.image.height-top;"."<br/>"."
        "."<br/>"."
        // draw the image"."<br/>"."
        canvas.drawImage(this.image, left, top, width, height, newPosition[0], newPosition[1], width, height);"."<br/>"."
        "."<br/>"."
        return [width, height];"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"ResourceManager.startupResourceManager")==0){
	
	$functionContent = "this.startupResourceManager = function(/**Array*/ images)"."<br/>"."
    {"."<br/>"."
        // set the global variable"."<br/>"."
		g_ResourceManager = this;"."<br/>"."
		"."<br/>"."
        // initialize internal state."."<br/>"."
        this.imageProperties = new Array();"."<br/>"."
		"."<br/>"."
        // for each image, call preload()"."<br/>"."
        for ( var i = 0; i < images.length; i++ )"."<br/>"."
		{"."<br/>"."
			// create new Image object and add to array"."<br/>"."
			var thisImage = new Image;"."<br/>"."
			this[images[i].name] = thisImage;"."<br/>"."
			this.imageProperties.push(images[i].name);"."<br/>"."
			"."<br/>"."
			// assign the .src property of the Image object"."<br/>"."
			thisImage.src = images[i].src;"."<br/>"."
		}"."<br/>"."
		"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}  else if(strcasecmp($functionName,"VisualGameObject.draw")==0){
	
	$functionContent = "this.draw = function(/**Number*/ dt, /**CanvasRenderingContext2D*/ context, /**Number*/ xScroll, /**Number*/ yScroll)"."<br/>"."
    {"."<br/>"."
        context.drawImage(this.image, this.x - xScroll, this.y - yScroll);"."<br/>"."
    }"."<br/>";

}   else if(strcasecmp($functionName,"VisualGameObject.startupVisualGameObject")==0){
	
	$functionContent = "this.startupVisualGameObject = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {"."<br/>"."
        this.startupGameObject(x, y, z);"."<br/>"."
        this.image = image;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>";

}   else if(strcasecmp($functionName,"VisualGameObject.shutdownVisualGameObject")==0){
	
	$functionContent = "this.shutdownVisualGameObject = function()"."<br/>"."
    {"."<br/>"."
        this.image = null;"."<br/>"."
        this.shutdownGameObject();"."<br/>"."
    }"."<br/>";

}   else if(strcasecmp($functionName,"VisualGameObject.shutdown")==0){
	
	$functionContent = "this.shutdown = function()"."<br/>"."
    {"."<br/>"."
        this.shutdownVisualGameObject();"."<br/>"."
    }"."<br/>";

}   else if(strcasecmp($functionName,"VisualGameObject.collisionArea")==0){
	
	$functionContent = "this.collisionArea = function()"."<br/>"."
    {"."<br/>"."
        return new Rectangle().startupRectangle(this.x, this.y, this.image.width, this.image.height);"."<br/>"."
    }"."<br/>";

}  

echo $functionContent;

?>