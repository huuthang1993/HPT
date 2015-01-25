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
				<div style="border-radius: 10px;border: green solid 5px; margin: 1cm">
					<table class="table" style="" >
						<thead>
						  <tr>
							<th width="50%">'.$questionUser->getName().'</th>
							<th width="50%">'.$answerUser->getName().'</th>
						  </tr>
						</thead>
							'.$albumText.'
							<tr>
								<td>
									<form method="post">
										<input type="hidden" name="action" value="like">
										<input type="hidden" name="qaaid" value="'.$album->getId().'">
										<button type="submit" class="btn btn-danger">Funny Like</button> <span class="badge" style="font-size: 20px">'.$album->getLike1().'</span>
									</form>
								<td>
					</table>
				</div>';
			}

			$views = new Home_View();
			$views->setTitle("Home");
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

						<div class="form-group">
							<label for="more-ask">Question: </label>
							<input type="text" class="form-control" name="more-ask" value="" placeholder="Or you can type your question!"/>
						</div>

						
						<button type="submit" class="btn btn-success" style="width:100px">Ask</button>
					</form>				
				';				
				
				$views = new Home_View();
				$views->setTitle("Ask");
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
				
				$bodyText = 
				'<table class="table">
					'.$bodyText.'
				</table>';
				
				$views = new Home_View();
				$views->setTitle("Ask");
				$views->setDescription("");
				$views->setBody($bodyText);
				
				$views->show();
			}
			
		}
		
		public function answer(){
			$account = $this->getAccount();			
			$QAAlbums = QAAlbum_Model::findByStatus(2, $account->getId());
			$bodyText = "";
			$text = "";
			
			$i = 0;
			foreach($QAAlbums as $QAAlbum){				
				$QARealtions = $QAAlbum->getQARelation();
				foreach($QARealtions as $QARealtion){
					$question = $QARealtion->getQuestion();
					$i++;
					$text = $text .
					'<div class="form-group">
						<label>Question 
							'.$i.'
							<span class="question-title" style="display: none;">: 
								'.$question->getTitle().'
							</span></label>
						<input type="text" class="form-control" id="q1" name="answer['.$QARealtion->getid().']" placeholder="Answer question '.$i.'!" >
					</div>
					';					
				}
				
			}
			
			$bodyText = '
				<form role="form" method="post">
					<input type="hidden" name="action" value="answer">
					'.$text.'
					<input type="checkbox">Show question. <br>
					<input type="submit" class="btn btn-info" value="Answer">
					<script>
						$(":checkbox").change(function(){
							if($(this).is(":checked")){
								$(".question-title").css({"display":"block"});
							}else{
								$(".question-title").css({"display":"none"});
							}
						});
					</script>
				</form>
			';
			$views = new Home_View();
			$views->setTitle("Answer");
			$views->setDescription("");
			$views->setBody($bodyText);
			
			$views->show();
		}
	}
?>