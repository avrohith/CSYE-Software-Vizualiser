<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$filename = "MainMenu/".$_POST['action'].".js";
$file = fopen($filename, "r") or exit("Unable to open file!");
$Gvariable_count = 0;
$Lvariable_count = 0;
$keyWords = array("this","if","do","while","if","for","var","else","switch");
$globalVariables = array();
$localVariables = array();

while(!feof($file))
  {
  $buffer = fgets($file);

   if((strpos($buffer,"this.")!=false || strpos($buffer,"var")!=false) && strpos($buffer,"=")!=false && strpos($buffer,"//")==false && strpos($buffer,"function")==false){

	if(strpos($buffer,"var")!=false){
		
		$tempVarArray = array();
		$tempVarArray = explode(" ",$buffer);
		$varposition = 0;
		for($i = 0;$i<count($tempVarArray);$i++){
			if(strcmp($tempVarArray[$i],"var")==0 || strcmp($tempVarArray[$i],"(var")==0){
				$varposition = $i;
			}
		}
		
		$varposition++;
		$variable_name = $tempVarArray[$varposition];
		if(!in_array($variable_name,$localVariables) && !in_array($variable_name,$keyWords) && !in_array($variable_name,$globalVariables)){
			$localVariables[$Lvariable_count] = $variable_name;
			$Lvariable_count++;
		}
	}else{
		$variable_name = trim($buffer);
		$variable_name = str_replace("this.","",$variable_name);
		$variable_name = str_replace("=","",$variable_name);
		$variable_name = str_replace(";","",$variable_name);
		$variable_name = str_replace("null","",$variable_name);
		$tempArray = explode(" ",$variable_name);
		$variable_name = $tempArray[0];
		if(!in_array($variable_name,$globalVariables) && !in_array($variable_name,$keyWords) && !in_array($variable_name,$localVariables)){
			$globalVariables[$Gvariable_count] = $variable_name;
			$Gvariable_count++;
		}
	}
   }

  }
  
  echo "Type of Variables present in:".$filename;
  echo "<br/>";
  echo "No.of Global variables: = ".$Gvariable_count."<br/>";
  echo "<br/>";
  echo "No.of Local variables: = ".$Lvariable_count."<br/>";
  echo "<br/>";
  echo "Global Variables are: "."<br/>";
  for($i=0;$i<$Gvariable_count;$i++){
  	echo $i+1;
	echo "."." ";
	echo $globalVariables[$i]."<br/>";
  }
  echo "<br/>";
  echo "Local Variables are: "."<br/>";
  for($i=0;$i<$Lvariable_count;$i++){
  	echo $i+1;
	echo "."." ";
	echo $localVariables[$i]."<br/>";
  }
  
echo "<br/><br/><br/>";



?>

</body>

</html>