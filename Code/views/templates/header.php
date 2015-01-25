			<nav class="navbar navbar-inverse navbar-fixed-top" style="height:50px;min-height:10px;>
			  <div class="container-fluid" style="margin-top:-5px">
				<div class="navbar-header" style="width:100px">
				  <a  href="#"><img src="<?=SITE ?>images/logo.png" style="width:95%;height:95%"></img></a>
				</div>
				<div>
					<?php
					if(isset($_COOKIE["acc"])){
						$acc = split("_", $_COOKIE["acc"]);
						$account = User_Model::findByUserAndPassword(md5($acc[0]), md5($acc[1]));
					?>
					  <ul class="nav navbar-nav" >
						<li><a href="<?=SITE."home" ?>" class="navigator" >Home</a></li>
						<li><a href="<?=SITE."home/top" ?>">Top</a></li>
						<li><a href="<?=SITE."home/ask" ?>">Ask</a></li>
						<li><a href="<?=SITE."home/answer" ?>">Answer</a></li>
					  </ul>
					  <ul class="nav navbar-nav navbar-right">
					  <li><a href="<?=SITE."home/signout"?>"><span class="glyphicon glyphicon-open"></span> Logout</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?=$account->getName()?></a></li>
					  </ul>
					<?php
					}else{						
					?>
					  <ul class="nav navbar-nav" >
						<li><a href="<?=SITE."home" ?>" class="navigator" >Home</a></li>
						<li><a href="<?=SITE."home/top" ?>">Top</a></li>
					  </ul>
					  <form method="post">
						  <ul class="nav navbar-nav navbar-right">
							<li><input type="text" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="username" name = "username" placeholder="User Name"></input></li>
							<li><input type="password" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="password" name="password" placeholder="Password"></input></li>					
							<li><button type="submit" class="btn btn-primary btn-sm" style="margin-left:5px;margin-top:10px"> <span class="glyphicon glyphicon-log-in"></span> Login</button></li>
							
							<li><button type="submit" class="btn btn-primary btn-sm" style="margin-left:5px;margin-top:10px;margin-right:35px"> <span class="glyphicon Sign Up"></span> Sign Up</button></li>
						  </ul>
					  </form>
					
					<?php 
					}
					?>
				</div>
			  </div>
			</nav>
			