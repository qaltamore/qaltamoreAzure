<?php 
	echo "JE HAIS OUTLOOK !!!";

$tmpTab = explode(";", $_SERVER['MYSQLCONNSTR_localdb']);
$parametersList = array();
for($i = 0; $i < sizeof($tmpTab); $i++) {
    array_push($parametersList, explode("=", $tmpTab[$i][1]));
}
echo "?";
var_dump(parametersList);
?>
