<?php
	include "log.php";   
	$log = new Log("server", "./logs/"); 

	//recuperar las variables
	$value1 = $_GET["x"];
	$value2 = $_GET["y"];
	$operation = $_GET["operation"];
	
	echo $log->insert("x: '$value1'", false, false,false);
	echo $log->insert("y: '$value2'", false, false,false);
	echo $log->insert("operation: '$operation'", false, false,false);
	
	switch ($operation) {
		case "sum":
			echo (double)$value1 + (double)$value2;
			break;
		case "subtraction":
			echo(double)$value1 - (double)$value2;
			break;
		case "division":
			if ((double)$value2 != 0 ){
				echo(double)$value1 / (double)$value2;
			}else{
				echo 'No se puede dividir sobre 0';
			}
			break;
		case "multiplication":
			echo(double)$value1 * (double)$value2;
			break;
	}
?>