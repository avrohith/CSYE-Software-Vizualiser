<?php

$className = $_POST["className"];
$functionContent = "";
//<p id=\"highlitedText\"></p>;

if(strcasecmp($className,"GameObject")==0){
	$functionContent = "SUPER CLASS";

} else if(strcasecmp($className,"VisualGameObject")==0){
	
	$functionContent = "this.startupVisualGameObject = function(/**Image*/ image, /**Number*/ x, /**Number*/ y, /**Number*/ z)"."<br/>"."
    {"."<br/>"."
       $ this.startupGameObject(x, y, z);"."<br/>"."
        this.image = <p id=\"highlitedText\">image</p>;"."<br/>"."
        return this;"."<br/>"."
    }"."<br/>"."
    
    /**"."<br/>"."
        Clean this object up"."<br/>"."
    */"."<br/>"."
    this.shutdownVisualGameObject = function()"."<br/>"."
    {"."<br/>"."
        this.<p id=\"highlitedText\">image</p> = null;"."<br/>"."
       $ this.shutdownGameObject();"."<br/>"."
    }"."<br/>"."";
	
} else if(strcasecmp($className,"MainMenu")==0){
	
	$functionContent = "No Variables Inherited from SUPER Class";
	
} else if(strcasecmp($className,"AnimatedGameObject")==0){
	
	$functionContent = "No Variables Inherited SUPER CLASS";
	
} else if(strcasecmp($className,"RepeatingGameObject")==0){
	
	$functionContent = "No Variables Inherited SUPER CLASS";
	
} else if(strcasecmp($className,"Powerup")==0){
	
	$functionContent = "No Variables Inherited SUPER CLASS";
	
} else if(strcasecmp($className,"LevelEndPost")==0){
	
	$functionContent = "No Variables Inherited SUPER CLASS";
	
} else if(strcasecmp($className,"Player")==0){
	
	$functionContent = "var xPos = this.left ? this.x : this.x + this.<p id=\"highlitedText\">frameWidth</p>;"."<br/>"."

var playerHeight = context.canvas.height - (this.y + this.<p id=\"highlitedText\">image</p>.height);"."<br/>"."";
	
}

echo $functionContent;

?>
