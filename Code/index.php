<?php
	include "configure/configure.php";
	include "models/core.php";
	include "views/core.php";
	include "controllers/core.php";
	
	$files = scandir("views");
	array_shift($files);array_shift($files);
	foreach($files as $file){
		if(is_file("views/$file") && $file != "core.php")
			include("views/".$file);
	}
	
	$files = scandir("models");
	array_shift($files);array_shift($files);
	foreach($files as $file){
		if(is_file("models/$file") && $file != "core.php")
			include("models/".$file);
	}
	
	$files = scandir("controllers");
	array_shift($files);array_shift($files);
	foreach($files as $file){
		if(is_file("controllers/".$file) && $file != "core.php"){
			include("controllers/".$file);
		}
	}
	
	//-----------------//
	define("SITE", "http://localhost/htp/trunk/Code/");
	//----------------//
	$title = "CLB Hương Sen";
	$description = "";
	$avatar = "logo.png";
	$body = "";
	

	if(isset($_GET["controller"])){
		if(is_file("controllers/".$_GET["controller"].".php")){
			$controllerName = ucfirst($_GET["controller"]);
			$controller = new $controllerName();
			if(isset($_GET["function"]) && method_exists($controller, $_GET["function"])){
				if(!isset($_GET["arg1"])){
					$controller->$_GET["function"]();
				}else if(!isset($_GET["arg2"])){
					$controller->$_GET["function"]($_GET["arg1"]);
				}else{
					$controller->$_GET["function"]($_GET["arg1"], $_GET["arg2"]);
				}				
			}			
		}
	}
	
	include "views/templates/home.php";
?>