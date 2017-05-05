<?php
session_start();
header("Content-Type:text/html;charset=UTF-8");

require_once("engine/config/config.php");
require_once("engine/config/table.php");
require_once("engine/classes/head.php");
if($_GET['l']) {
	$class = trim(strip_tags($_GET['l']));
}
else {
	$class = "main";
}
if(file_exists("engine/classes/".$class.".php")) {
	include("engine/classes/".$class.".php");
	if(class_exists($class)) {
	
		$obj = new $class;
		$obj->get_body();
	}
	else {
		exit();
	}
}
else {
	exit();
}
?>
