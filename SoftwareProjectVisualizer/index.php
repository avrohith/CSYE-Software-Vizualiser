
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML><HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
<TITLE>Software Project Visualizer</TITLE>
<LINK rel="stylesheet" type="text/css" href="css/base/jquery.ui.all.css">
<LINK rel="stylesheet" type="text/css" href="css/layout-default-latest.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/treecss.css" type="text/css" />
<link rel="stylesheet" href="css/jScrollPane.css" type="text/css" />
<link rel="stylesheet" href="css/jsPlumbDemo.css">
<link rel="stylesheet" href="css/chartDemo.css">
<link rel="stylesheet" href="css/demos.css" type="text/css" />
<link rel="stylesheet" href="css/prettify.css" type="text/css" />
<STYLE type="text/css">
/* Using an 'optional-container' instead of 'body', so need body to have a 'height' */
html, body {
  width:100%;
  height:100%;
  padding:0;
  margin:0;
  overflow:	hidden !important;
  background:url(images/graphy.png) repeat top left;
  }
#optional-container {
  width:96%;
  height:94%;
  margin-top:2%;
  margin-left:2%;
  }
.ui-layout-center {

  overflow: hidden;
  }

</STYLE>
<SCRIPT type="text/javascript" src="lib/js/jquery-latest.js"></SCRIPT>
<SCRIPT type="text/javascript" src="lib/js/jquery-ui-latest.js"></SCRIPT>
<SCRIPT type="text/javascript" src="lib/js/jquery.layout-latest.js"></SCRIPT>
<!-- theme switcher -->
<SCRIPT type="text/javascript" src="lib/js/debug.js"></SCRIPT>
<SCRIPT type="text/javascript" src="lib/js/themeswitchertool.js"></SCRIPT>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.color.js"></script>
<script type="text/javascript" src="js/libs/raphael.js"></script>


<script type="text/javascript" src="js/znode/nodegraph.js"></script>
<script type="text/javascript" src="js/znode/ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jScrollPane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

		<script type="text/javascript" src="chartjs/lib/jsBezier-0.3-min.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-defaults-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-connectors-statemachine-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-renderers-svg-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-renderers-canvas-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jsPlumb-renderers-vml-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/1.3.9/jquery.jsPlumb-1.3.9-RC1.js"></script>
		<script type="text/javascript" src="chartjs/chartDemo.js"></script>
		<script type="text/javascript" src="chartjs/demo-list.js"></script>
		<script type="text/javascript" src="chartjs/demo-helper-jquery.js"></script>
<script type="text/javascript" src="js/jquery.highlight-3.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>


<SCRIPT type="text/javascript">
var myLayout;
$(document).ready(function(){
  $("#tabs_div").tabs();
  $(".header-footer").hover(
     function(){
       $(this).addClass('ui-state-hover');
     },
     function(){
       $(this).removeClass('ui-state-hover');
     });
     myLayout = $('#optional-container').layout();
      //addThemeSwitcher('.ui-layout-north',{
       // top: '13px', right: '20px'
        //});

$("#tab_7").load("resourcesview.php");

});
$("#functionsList").jScrollPane();
$("#functionSource").jScrollPane();
</SCRIPT>
</HEAD>
<BODY>
<DIV id="optional-container">
<DIV class="ui-layout-north" style="text-align: center; font-size: medium;font-weight: bold">
Software Project Visualizer
</DIV>
<div id="tabs_div" class="ui-layout-center">
   <ul style="-moz-border-radius-bottomleft: 0; -moz-border-radius-bottomright: 0;">
     <li><A href="#tab_1"><SPAN>Source Code View</SPAN></A></li>
     <li><A href="#tab_5"><SPAN>Inheritance View</SPAN></A></li>
     <li><A href="#tab_2"><SPAN>Function View</SPAN></A></li>
     <li><A href="#tab_3"><SPAN>Global Variables View</SPAN></A></li>
     <li><A href="#tab_4"><SPAN>Composition View</SPAN></A></li>
     <li><A href="#tab_7"><SPAN>Resources View</SPAN></A></li>
     <li><A href="#tab_6"><SPAN>Class Variables View</SPAN></A></li>
   </ul>
<div class="ui-layout-content ui-widget-content ui-corner-bottom" style="border-top: 0; padding-bottom: 1em;">
   <div id="tab_1" >
      <div id="openWin">
         <div id="fileTitle">Files:</div>
            <div id="files"></div>
      </div>
      <div id="overlay"></div>
      <div id="controls">
         <div id="clear" class="btn">Clear All</div>
         
         <div id="addnode" class="btn">Add Node</div>
         <div id="clearvar" class="btn">Reset</div>
         <div id="help" class="btn">Help</div>
      </div>
      <div id="canvas"></div>
   </div>


   <div id="tab_2">
   <p style="margin:auto;">Select a Class to view its functions</p>
   <br/>
      <div class="holder">
         <div id="functionsList">
            <div id="functions" ></div>
         </div>
      </div>
      <div id="functionSource" class="code-scroll-pane">
         <p id="functionSourceCode"></p>
      </div>
   </div>

   <div id="tab_3">
   <p style="margin:auto;">Select a variable </p>
   <br/>
      <div class="holder">
         <div id="variableList">
            <a href="#" onclick="fillData('fps')">FPS<br/></a>
            <a href="#" onclick="fillData('sbf')">SECONDS_BETWEEN_FRAMES<br/></a>
            <a href="#" onclick="fillData('gom')">g_GameObjectManager<br/></a>
            <a href="#" onclick="fillData('gam')">g_ApplicationManager<br/></a>
            <a href="#" onclick="fillData('grm')">g_ResourceManager<br/></a>
            <a href="#" onclick="fillData('gsc')">g_score<br/></a>
            <a href="#" onclick="fillData('gplayer')">g_player<br/></a>
         </div>
      </div>
      
      <div id="varibleContainer">
      
      <div id="variablespane">
         <div>
         <p class="globalVariablesViewP">Initial Value:</p><br/>
            <p id="variableInitialised">
              
            </p>
            <br/>
         </div>
         <div>
         <p class="globalVariablesViewP">Used</p><br/>
            <p id="variableUsed">
              
            </p>
            <br/>
         </div>
         <div>
         <p class="globalVariablesViewP">Declared</p><br/>
            <p id="variableDeclared">
              
            </p>
            <br/>
         </div>
      </div>
      </div>
      
    </div>
    
    <div id="tab_4">

    </div>

    <div id="tab_5" style="text-align:center">
    <div id="inheritanceView">
    <div id="ivColorCodes" style="width:500px; margin: 0 auto;background:#FFF" >
        <p> Selected Class - <img src="img/selectedclasscolor.png" width="28" height="22" /> Super Class - <img src="img/superclasscolor.png" width="34" height="27" /> Sub Class - <img src="img/subclasscolor.png" width="40" height="33" /></p>
    </div>

		<div id="ivdemo">
			<div class="window" id="GameObject"><a onclick="showDetails('GameObject')">GameObject</a></div>
			<div class="window" id="VisualGameObject"><a onclick="showDetails('VisualGameObject')">VisualGameObject</a></div>
			<div class="window" id="MainMenu"><a onclick="showDetails('MainMenu')">MainMenu</a></div>
			<div class="window" id="AnimatedGameObject"><a onclick="showDetails('AnimatedGameObject')">AnimatedGameObject</a></div>
			<div class="window" id="RepeatingGameObject"><a onclick="showDetails('RepeatingGameObject')">RepeatingGameObject</a></div>
			<div class="window" id="Powerup"><a onclick="showDetails('Powerup')">Powerup</a></div>
          <div class="window" id="LevelEndPost"><a onclick="showDetails('LevelEndPost')">LevelEndPost</a></div>
          <div class="window" id="Player"><a onclick="showDetails('Player')">Player</a></div>
		</div>

	<div id="ivSourceCodeDiv" style="overflow:scroll;">
     <p class="ivHeading">Source Code</p>
     <br/>
     <p id="ivSourceCode" style="text-align:justify;"></p>
	</div>
        
        <div id="ivFunctionsDiv" style="overflow:scroll">
        <p class="ivHeading">Super Class Function Calls</p>
        <br/>
        <p id="ivFunctions" style="text-align:justify;"></p>
	    </div>
        
        <div id="ivVariablesDiv" style="overflow:scroll">
        <p class="ivHeading">Super Class Variable Calls</p>
        <br/>
        <p id="ivVariables" style="text-align:justify;"></p>
	    </div>
        </div>
    </div>
    <div id="tab_6">

    </div>
    <div id="tab_7">

    </div>
    
</DIV>

</DIV>

<DIV class="ui-layout-west">
  
  <div id="FileTree" >
  <div id="text" style="border: thin; border-bottom-style: solid">
  <h5>Selected File:</h5>
  <p id="selectedClass"></p>
  <br/>
  </div>
<ul id="directoryList">
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$dir = $root.'/SoftwareProjectVisualizer'.'/MainMenu';
$files = scandir($dir);
foreach($files as $ind_file){
if(strpos($ind_file,".")!=0 || strpos($ind_file,"..")!=0)
	{
		if(strpos($ind_file,".js")!=false){
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/js.png\"><a href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
		else if(strpos($ind_file,".png")!=false)
		{
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/img.png\"><a href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
		else if(strpos($ind_file,".jpg")!=false)
		{
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/img.png\"><a  href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
		else if(strpos($ind_file,".jpeg")!=false)
		{
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/img.png\"><a href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
		else if(strpos($ind_file,".gif")!=false)
		{
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/img.png\"><a href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
		else if(strpos($ind_file,".html")!=false)
		{
			echo "<li><img width=\"20px\" height=\"20px\" src=\"images/html.png\"><a href=\"#\" onclick=\"FillList('".$ind_file."')\">".$ind_file."</a></li>";
		}
	}
}
?>
</ul>
</div>
</DIV>

</DIV>

<script type="text/javascript">
      // Globally declaring the variables
      var graph;
</script>

	    


</BODY>
</HTML>