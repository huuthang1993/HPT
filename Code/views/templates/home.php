	<!DOCTYPE html>
	<html>	
		<head>
			<title><?php echo $title; ?></title>
			<meta name="description" content="<?echo $description;?>">
			<meta name="keywords" content="" >
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
			<?php include 'header.php';?>
			<div class="container-fluid" style="padding:0px;">
					 <div class="jumbotron" style="margin-left:0px;padding:10px;">
					 <h1 align="center" style="padding:0px;">WebSite Tittle</h1>      
					</div>
			</div>
			<div class="container-fluid" ">
						<div class="col-md-8 scrollit" style="border:2px solid red">
						  <h>CONTENT</h>
						  <div >
						  <img src="<?=SITE ?>images/content.jpg" style="width:100%;height:80%"></img>
						  </div>
						</div>
						
						<div class="col-md-4 fixed" >
						  <ul class="nav nav-pills nav-stacked">
							<li class="active"><a >Top</a></li>
							<li><a href="#">Top Mounth</a></li>
								<li><a href="#">Top Week</a></li>
								<li><a href="#">New Today</a></li> 
						  </ul>
						</div>
			</div>
			<?php include 'footer.php';?>
		</body>
	</html>