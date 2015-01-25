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
		 <div class="col-md-8" style="border:2px solid green; margin:10px;border-radius: 25px;">			
			<div class="row" >
			</div>
			  <div class="row">
			  <div class="col-md-8">
					<div>
					<B class="bg-danger" style="margin-top:5px">Answer your question!<B>
					<hr>
					</div>
					<div>
					<form role="form">
						<div class="form-group">
						  <label for="q1">Question 1? (Fromt database)</label>
						  <input type="text" class="form-control" id="q1" name="answer[]" placeholder="Answer question 1!" >
						</div>
						<div class="form-group">
						  <label for="q2">Question 2? (Fromt database)</label>
						  <input type="text" class="form-control" id="q2" name="answer[]" placeholder="Answer question 2!" >
						</div>
						<div class="form-group">
						  <label for="q3">Question 3? (Fromt database)</label>
						  <input type="text" class="form-control" id="q3" name="answer[]" placeholder="Answer question 3!" >
						</div>
						<button type="submit" class="btn btn-danger" style="width:100px">Ask</button>
					  </form>
					</div>
				</div>
			  </div>
			  
			
		</div>	
			
			</body>
	</html>