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
					$question = $QARealtion->getQuestion();
					$answer = $QARealtion->getAnswer();
				}
				
				$bodyText = $bodyText.
				'<div class="row">
					<div class="col-md-6">'.$questionUser->getName().'
					<div class="col-md-6">'.$answerUser->getName().'
					'.$albumText.'
				</div>';
			}
			
			
			$views = new Home_View();
			$views->setTitle("Trang chủ");
			$views->setDescription("");
			$views->setBody($bodyText);
			
			$views->show();
		}
	}
?>