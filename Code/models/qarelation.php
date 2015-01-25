<?php
	class QARelation_Model extends Core_Model{
		private $id;
		private $qid;//question id
		private $aid;//answer id
		private $qaaid;//QA album id
		
		public function getId(){return $this->id;}
		public function setId($id){$this->id = $id;}
		
		public function getQid(){return $this->qid;}
		public function setQid($qid){$this->qid = $qid;}

		public function getAid(){return $this->aid;}
		public function setAid($aid){$this->aid = $aid;}
		
		public function getQaaid(){return $this->qaaid;}
		public function setQaaid($qaaid){$this->qaaid = $qaaid;}		
	
		public function getAttrs(){return get_object_vars($this);}
	
		public function getAnswer(){
			if($this->getaid()){
				return AStore_Model::find($this->getAid());
			}else{
				return null;
			}				
		}
		
		public function getQuestion(){
			if($this->getQid()){
				return QStore_Model::find($this->getQid());
			}else{
				return null;
			}
		}
		
		public static function find($id = null, $table = 'qarelation', $page = 1, $articlePerPage = 15){
			if($id){
				$qarelation = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE id = '$id'"));
				if($qarelation){
					return new QARelation_Model($qarelation);
				}else{
					return null;
				}
			}else{
				$qarelations = mysql_fetch_array(mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT ".($page * $articlePerPage))." OFFSET ".(($page - 1)*$articlePerPage));
				
				$qarelationArray = array();
				while($qarelation = mysql_fetch_array($qarelations)){
					array_push($qarelationArray, new QARelation_Model($qarelation));
				}
				return $qarelationArray;
			}
		}
		
	}
?>