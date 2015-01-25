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
		 <div class="col-md-8" style="border:2px solid pink; margin:10px;border-radius: 25px;">			
			<div class="row" >
			</div>
			  <div class="row">
			  <div class="col-md-8">
					<div>
					<B class="bg-danger" style="margin-top:5px">Ask an User !<B>
					<hr>
					</div>
					<div>
					<form role="form">
						<div class="form-group">
						  <label for="usename">Username to be asked:</label>
						  <input type="email" class="form-control" id="usename" name="usename" placeholder="Enter UserName">
						</div>
						<div class="form-group">
						  <label for="sel1">Question 1:</label>
						  <select class="form-control" id="sel1">
							<option>Are you human?	</option>
							<option>Are you a idiot :D ?</option>
							<option>Who is your idol?</option>
							<option>Who is your favorite food?</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="sel1">Question 2:</label>
						  <select class="form-control" id="sel1">
							<option>Are you a idiot :D ?</option>
							<option>Are you human?	</option>
							<option>Who is your idol?</option>
							<option>Who is your favorite food?</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="sel1">Question 3:</label>
						  <select class="form-control" id="sel1">
						  <option>Who is your idol?</option>
							<option>Are you a idiot :D ?</option>
							<option>Are you human?	</option>
							<option>Who is your favorite food?</option>
						  </select>
						</div>
						<button type="submit" class="btn btn-danger" style="width:100px">Ask</button>
					  </form>
					</div>
				</div>
			  </div>
			  
			
		</div>	
			
			</body>
	</html>