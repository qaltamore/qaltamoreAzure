<?php 
	echo "JE HAIS OUTLOOK !!!";

$tmpTab = explode(";", $_SERVER['MYSQLCONNSTR_localdb']);
$parametersList = array();
for($i = 0; $i < sizeof($tmpTab); $i++) {
    $parametersList = explode("=", $tmpTab[$i][1]);
}

var_dump(parametersList);
?>
