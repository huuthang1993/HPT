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
				foreach($QARealtions as $QARealtion){
					$albumText = "";
					$question = $QARealtion->getQuestion();
					$answer = $QARealtion->getAnswer();
				}
				
				$bodyText = $bodyText.
				'
					<thead>
					  <tr>
						<th>'.$questionUser->getName().'</th>
						<th>'.$answerUser->getName().'</th>
					  </tr>
					</thead>
					<tbody>
						'.$albumText.'
					<tbody>';
			}

echo '
									<div class="col-md-8">
									<table class="table">
										<thead>
										  <tr>
											<th>Question</th>
											<th>Answerer</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Are you human?</td>
											<td>No</td>
										  </tr>
										  <tr>
											<td>Are you a idiot :D ?</td>
											<td>Yes<td>
										  </tr>
										  <tr>
											<td>Who is your idol?</td>
											<td>Break<td>
										  </tr>
										  <tr>
											<td>Who is your favorite  food?</td>
											<td>Taylor Swift<td>
										  </tr>
										</tbody>
									 </table>
								</div>

'								
			
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
	}
?>