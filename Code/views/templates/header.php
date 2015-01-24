	<!DOCTYPE html>
	<html>	
		<head>
			<title><?php echo $title; ?></title>
			<meta name="description" content="<?echo $description;?>">
			<meta name="keywords" content="Hackathon" >
			<meta name="author" content="HTP">
			<link rel='shortcut icon' href="">
			<meta charset="UTF-8">
			<script type="text/javascript" src="<?=SITE ?>adapter/js/jquery.js"></script>		
			<script type="text/javascript" src="<?=SITE ?>adapter/js/script.js"></script>
			<link rel="stylesheet" href="<?=SITE ?>adapter/css/bootstrap.min.css">
			<link rel="stylesheet" href="<?=SITE ?>adapter/css/bootstrap-theme.min.css">
			<script src="<?=SITE ?>adapter/js/bootstrap.min.js"></script>	
			<script src="<?=SITE ?>adapter/js/angular.min.js"></script>	
			<link rel="stylesheet" href="<?=SITE ?>adapter/css/style.css" type="text/css" media="screen" />
			
		</head>
		<body>
		
			<div >
			<nav class="navbar navbar-inverse navbar-fixed-top" style="height:50px;min-height:10px;>
			  <div class="container-fluid" style="margin-top:-5px">
				<div class="navbar-header" style="width:100px">
				  <a  href="#"><img src="<?=SITE ?>images/logo.png" style="width:95%;height:95%"></img></a>
				</div>
				<div>
				  <ul class="nav navbar-nav" >
					<li><a href="#" class="navigator" >Home</a></li>
					<li><a href="#">All Post</a></li>
					<li><a href="#">Top</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
				    <li><input tyle="text" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="username" placeholder="User Name"></input></li>
				    <li><input tyle="text" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="pass" placeholder="Password"></input></li>					
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="#" style="margin-right:10px"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			</div> 
			
			<!--
			<div >
			<nav class="navbar navbar-inverse navbar-fixed-top" style="height:40px;min-height:10px;">
			  <div class="container-fluid" style="margin-top:-5px">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Logo</a>
				</div>
				<div>
				  <ul class="nav navbar-nav" >
					<li><a href="#" class="navigator" >Home</a></li>
					<li><a href="#">All Post</a></li>
					<li><a href="#">Ask</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
				  <li><a href="#"><span class="glyphicon glyphicon-open"></span> Logout</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> User:huuthang1993</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			</div>
					-->
			</body>
	</html>