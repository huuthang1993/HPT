<?php
	class Home extends Core{
		public function view($arg1 = null, $arg2 = null){			
			$QAAlbums = QAAlbum_Model::find();
			$QARelationArray = array();
			$bodyText = "";
			$albumText = "";
			
			foreach($QAAlbums as $album){
				$questionUser = $album->getQuestionUser();
				$answerUser = $album->getAnswerUser();
				$QARealtions = $album->getQARelation();	
				$albumText = "";
				
				foreach($QARealtions as $QARealtion){
					if($QARealtion->getQuestion())
						$question = $QARealtion->getQuestion()->getTitle();
					else
						$question = "";
					
					if($QARealtion->getAnswer()){
						$answer = $QARealtion->getAnswer()->getTitle();
					}else{
						$answer = "";
					}
					
					$albumText = $albumText.
						'<tr>
							<td>'.$question.'
							<td>'.$answer;
				}
				
				$bodyText = $bodyText.
				'
				<table class="table">
					<thead>
					  <tr>
						<th>'.$questionUser->getName().'</th>
						<th>'.$answerUser->getName().'</th>
					  </tr>
					</thead>
					<tbody>
						'.$albumText.'
					<tbody>
				</table>';
			}

			$views = new Home_View();
			$views->setTitle("Trang chủ");
			$views->setDescription("");
			$views->setBody($bodyText);
			
			$views->show();
		}
		
		public function signout(){
			setCookie("acc", "", -1, SITE);
			header("Location: ".SITE."home/view");
		}
		
		public function ask($id = null){
			if($id){
				$user = User_Model::find($id);
				$bodyText = "";
				$questionText = '';
				
				$questions = QStore_Model::find();
				
				foreach($questions as $question){
					$questionText = $questionText.'
							<option value="'.$question->getId().'">'.$question->getTitle().'</option>
					';
				}
				
				$bodyText = '
					<form role="form" method="post">
						<input type="hidden" name="userid" value="'.$id.'"/>
						<input type="hidden" name="action" value="ask" value='.$id.'/>
						
						<div class="form-group">
						  <label for="sel1">Question: </label>
						  <select class="form-control" name="question">
								'.$questionText.'
						  </select>
						</div>
						<button type="submit" class="btn btn-success" style="width:100px">Ask</button>
					</form>				
				';				
				$views = new Home_View();
				$views->setTitle("Trang chủ");
				$views->setDescription("");
				$views->setBody($bodyText);
				

				
				$views->show();
				
			}else{
				$users = User_Model::find();
				$bodyText = "";
				
				foreach($users as $user){
					$bodyText = $bodyText.
					'<tr>
						<td>'.$user->getId().'
						<td><a href="'.SITE.'home/ask/'.$user->getId().'">'.$user->getName().'</a>';
				}
				
				$views = new Home_View();
				$views->setTitle("Trang chủ");
				$views->setDescription("");
				$views->setBody($bodyText);
				
				$views->show();
			}
			
		}
	}
?>