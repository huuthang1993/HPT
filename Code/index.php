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
	
	function getCurrentURL(){
		$pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
		 
		 if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 
		 return $pageURL;		
	}
	
	function getCurrenHost(){
		$pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
		 
		 if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		 } else {
			$pageURL .= $_SERVER["SERVER_NAME"];
		 }
		 
		 return $pageURL;				
	}
//--------------------------------------//
	
//------------------------------------------------
	function checkLogin(){
		if(isset($_COOKIE["acc"])){
			$acc = split("_", $_COOKIE["acc"]);
			return User_Model::findByUserAndPassword(md5($acc[0]), md5($acc[1]));
		}else{
			if(isset($_POST["username"]) && isset($_POST["password"])){
				$account = User_Model::findByUserAndPassword(md5(md5($_POST["username"])), md5(md5($_POST["password"])));
				if($account){
					setCookie("acc", md5($_POST["username"]).'_'.md5($_POST["password"]));
				}else{
					setCookie("acc", "", -1);
					return null;
				}
				header("Location: ".getCurrentURL());
			}else{
				setCookie("acc", "", -1);
				return null;
			}
		}
	}

	
	$account = checkLogin();
	if($account){
		if(isset($_POST["action"])){
			switch($_POST['action']){
				case 'ask':
					
					break;
			}
		}
	}
//-----------------------------------------------	
	if(isset($_GET["controller"])){
		if(is_file("controllers/".$_GET["controller"].".php")){
			$controllerName = ucfirst($_GET["controller"]);
			$controller = new $controllerName();
			if(isset($_GET["function"])){
				$function = $_GET["function"];
			}else{
				$function = "view";
			}
			if(method_exists($controller, $function)){
				if(!isset($_GET["arg1"])){
					$controller->$function();
				}else if(!isset($_GET["arg2"])){
					$controller->$function($_GET["arg1"]);
				}else{
					$controller->$function($_GET["arg1"], $_GET["arg2"]);
				}				
			}			
		}
	}
	
?>