<?php
	class Home_View extends Core_View{
		
		public function show(){
			echo '
				<!DOCTYPE html>
				<html>	
					<head>
						<title>'.$this->getTitle().'</title>
						<meta name="description" content="'.$this->getDescription().'">
						<meta name="keywords" content="Hackathon" >
						<meta name="author" content="Hương Sen">
						<link rel=""shortcut icon" href=http://clbhuongsen.com/logo.png">
						<meta charset="UTF-8">
						<script type="text/javascript" src="'.SITE.'adapter/js/jquery.js"></script>		
						<script type="text/javascript" src="'.SITE.'adapter/js/script.js"></script>
						<link rel="stylesheet" href="'.SITE.'adapter/css/bootstrap.min.css">
						<link rel="stylesheet" href="'.SITE.'adapter/css/bootstrap-theme.min.css">
						<script src="'.SITE.'adapter/js/bootstrap.min.js"></script>	
						<script src="'.SITE.'adapter/js/angular.min.js"></script>	
						<link rel="stylesheet" href="'.SITE.'adapter/css/style.css" type="text/css" media="screen" />
						
					</head>
					<body>
						<div class="container">';
						include "views/templates/header.php";
			echo '			
							<div style="margin-top: 2cm;">
								<div class="row">
								</div>							
								'.$this->getBody().'
							</div>
						</div>
					</body>
				</html>';					
		}
	}
?>