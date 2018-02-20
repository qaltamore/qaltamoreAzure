<?php 
	echo "JE HAIS OUTLOOK !!!";

$tmpTab = explode(";", $_SERVER['MYSQLCONNSTR_localdb']);
$parametersList = array();
var_dump(sizeof($tmpTab));
for($i = 0; $i < sizeof($tmpTab); $i++) {
echo explode("=", $tmpTab[$i])[1] . "<br />";
    array_push($parametersList, explode("=", $tmpTab[$i])[1]);
}

var_dump(parametersList);
?>
