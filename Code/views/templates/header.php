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
						<li><a href="#" class="navigator" >Home</a></li>
						<li><a href="#">All Post</a></li>
						<li><a href="#">Top</a></li>
						<li><a href="#">Ask</a></li>
					  </ul>
					  <ul class="nav navbar-nav navbar-right">
					  <li><a href="<?=SITE."home/signout"?>"><span class="glyphicon glyphicon-open"></span> Logout</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?=$account->getName()?></a></li>
					  </ul>
					<?php
					}else{						
					?>
					  <ul class="nav navbar-nav" >
						<li><a href="#" class="navigator" >Home</a></li>
						<li><a href="#">All Post</a></li>
						<li><a href="#">Top</a></li>
					  </ul>
					  <form method="post">
						  <ul class="nav navbar-nav navbar-right">
							<li><input tyle="text" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="username" name = "username" placeholder="User Name"></input></li>
							<li><input tyle="text" style="margin-left:5px;margin-top:15px;width:100px;border-radius: 5px;border:none" id="password" name="password" placeholder="Password"></input></li>					
							<li><button type="submit"> <span class="glyphicon glyphicon-log-in"></span> Login</button></li>
							<li><a href="#" style="margin-right:10px"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
						  </ul>
					  </form>
					
					<?php 
					}
					?>
				</div>
			  </div>
			</nav>
			