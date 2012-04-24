<?php

$variableName = $_POST["variableName"];
$initialValue = "";

if(strcasecmp($variableName,"fps")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var FPS = 30";

} else if(strcasecmp($variableName,"sbf")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var SECONDS_BETWEEN_FRAMES = 1 / FPS";

} else if(strcasecmp($variableName,"gom")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var g_GameObjectManager = null";

} else if(strcasecmp($variableName,"gam")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var g_ApplicationManager = null";

} else if(strcasecmp($variableName,"grm")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var g_ResourceManager = null";

} else if(strcasecmp($variableName,"gsc")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var g_score = 0";

} else if(strcasecmp($variableName,"gplayer")==0){
	
	$initialValue = "Initialized in : Main.js"."<br/>".
	"Value: var g_player = null";

}

echo $initialValue;

?>