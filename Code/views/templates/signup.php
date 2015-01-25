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
			<div class="container-fluid">
			<?php include 'header.php';?>
			</div>
			
			<div class="container-fluid" style="margin-top:30px">
					<div class="container">
						<div class="row">
							<form role="form">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="name">Enter Name</label>
										<div class="input-group">
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" >
											<span class="input-group-addon"><span ></span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="radio-inline">
										  <input type="radio" name="sex">Male
										</label>
										<label class="radio-inline">
										  <input type="radio" name="sex">Female
										</label>
									</div>
									<div class="form-group">
										<label for="usename">Enter UserName</label>
										<div class="input-group">
											<input type="text" class="form-control" name="usename" id="usename" placeholder="Enter UserName" required>
											<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="password">Enter Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
											<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="mail">Enter Email</label>
										<div class="input-group">
											<input type="email" class="form-control" id="mail" name="mail" placeholder="Enter Email" required>
											<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="phone">Enter Phone</label>
										<div class="input-group">
											<input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" >
											<span class="input-group-addon"><span "></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="birthday">Enter Birthday</label>
										<div class="input-group">
											<input type="date" class="form-control" id="birthday" name="birthday"  >
											<span class="input-group-addon"><span ></span></span>
										</div>
									</div>
									<input type="submit" name="submit" id="submit" value="Sign up" class="btn btn-info pull-left">
								</div>
							</form>
						</div>
					</div>	
					</div>
			<div class="container-fluid">
			<?php include 'footer.php';?>
			</div>
		</body>
	</html>