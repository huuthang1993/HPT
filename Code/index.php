<?php
	include "configure/configure.php";
	include "controllers/core.php";
	include "models/core.php";
	//-----------------//
	define("SITE", "http://localhost/htp/");
	//----------------//
	$title = "CLB Hương Sen";
	$description = "";
	$avatar = "logo.png";
	$body = "";
	

	if(isset($_GET["controller"])){
		if(is_file("controllers/".$_GET["controller"].".php")){
			include "controllers/".$_GET["controller"].".php";
			$controller = new $_GET["controller"]();
			if(isset($_GET["function"]) && method_exists($controller, $_GET["function"])){
				if(!isset($_GET["arg1"])){
					$controller->$_GET["function"]();
				}else if(!isset($_GET["arg2"])){
					$controller->$_GET["function"]($_GET["arg1"]);
				}else{
					$controller->$_GET["function"]($_GET["arg1"], $_GET["arg2"]);
				}				
			}else{
				include "controllers/exception.php";
				include "views/index.php";
			}			
		}else{
			include "controllers/exception.php";
			include "views/index.php";
		}
	}else{
		include "controllers/exception.php";
		include "views/index.php";
	}
	
?>