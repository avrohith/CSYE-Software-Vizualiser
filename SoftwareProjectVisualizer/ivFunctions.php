<?php

$className = $_POST["className"];
$functionContent = "";
//<p id=\"highlitedText\"></p>;

if(strcasecmp($className,"GameObject")==0){

	

} else if(strcasecmp($className,"VisualGameObject")==0){
	
	$functionContent = "this.startupVisualGameObject = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {"."<br/>"."
       <p id=\"highlitedText\">this.startupGameObject(x, y, z);</p>"."<br/>"."
        this.image = image;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
    "."<br/>"."
    /**"."<br/>"."
        Clean this object up"."<br/>"."
    */"."<br/>"."
    this.shutdownVisualGameObject = function()"."<br/>"."
    {"."<br/>"."
        this.image = null;"."<br/>"."
		<p id=\"highlitedText\">this.shutdownGameObject()</p>"."<br/>"."
   "."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"MainMenu")==0){
	
	$functionContent = " this.startupMainMenu = function()"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.startupVisualGameObject(g_ResourceManager.mainmenu, 0, 0, 1);</p> "."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"AnimatedGameObject")==0){
	
	$functionContent = "
     this.startupAnimatedGameObject = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z, /**Number*/ frameCount, /**Number*/ fps)"."<br/>"."
    {"."<br/>"."
        if (frameCount <= 0) throw \"framecount can not be <= 0\";"."<br/>"."
        if (fps <= 0) throw \"fps can not be <= 0\""."<br/>"."
		"."<br/>"."
		<p id=\"highlitedText\">this.startupVisualGameObject(image, x, y, z);</p>"."<br/>"."
        this.currentFrame = 0;"."<br/>"."
        this.frameCount = frameCount;"."<br/>"."
        this.timeBetweenFrames = 1/fps;"."<br/>"."
        this.timeSinceLastFrame = this.timeBetweenFrames;"."<br/>"."
        this.frameWidth = this.image.width / this.frameCount;"."<br/>"."
"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
	
	
	  this.shutdownAnimatedGameObject = function()"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.shutdownVisualGameObject();</p>"."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"RepeatingGameObject")==0){
	
	$functionContent = "this.startupRepeatingGameObject = function(image, x, y, z, width, height, scrollFactor)"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.startupVisualGameObject(image, x, y, z);</p>"."<br/>"."
        this.width = width;"."<br/>"."
        this.height = height;"."<br/>"."
        this.scrollFactor = scrollFactor;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
	"."<br/>"."
	this.shutdownstartupRepeatingGameObject = function()"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.shutdownVisualGameObject();</p>"."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"Powerup")==0){
	
	$functionContent = "this.startupPowerup = function(/**Number*/ value, /**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z, /**Number*/ frameCount, /**Number*/ fps)"."<br/>"."
    {
		<p id=\"highlitedText\">this.startupAnimatedGameObject(image, x, y - this.bounceHeight, z, frameCount, fps);</p>"."<br/>"."
        this.value = value;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
	this.shutdownPowerup = function()"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.shutdownAnimatedGameObject();</p>"."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"LevelEndPost")==0){
	
	$functionContent = "this.startupLevelEndPost = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {
		<p id=\"highlitedText\">this.startupAnimatedGameObject(image, x, y, z, 4, 10);</p>"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
"."<br/>"."
    this.shutdownAnimatedGameObject = function()"."<br/>"."
    {"."<br/>"."
		<p id=\"highlitedText\">this.shutdownVisualGameObject();</p>"."<br/>"."
    }"."<br/>"."
	"."<br/>"."
	this.shutdownLevelEndPost = function()"."<br/>"."
    {
		<p id=\"highlitedText\">this.shutdownAnimatedGameObject();</p>"."<br/>"."
    }"."<br/>"."
	"."<br/>"."";
	
} else if(strcasecmp($className,"Player")==0){
	
	$functionContent = "this.startupPlayer = function(level)"."<br/>"."
    {
		<p id=\"highlitedText\">this.startupAnimatedGameObject(g_ResourceManager.idleLeft, 300, 400 - 48 - 48, 4, 6, 20);</p>"."<br/>"."
        this.level = level;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."";
	
}

echo $functionContent;

?>
