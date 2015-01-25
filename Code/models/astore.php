<?php
	class AStore_Model extends Core_Model{
		private $id;
		private $title;
		private $qaid; //qa id
		
		public function getId(){return $this->id;}
		public function setId($id){$this->id = $id;}
		
		public function getTitle(){return $this->title;}
		public function setTitle($title){$this->title = $title;}
		
		public function getQaid(){return $this->qaid;}
		public function setQaid($qaid){$this->qaid = $qaid;}
		
		public function getAttrs(){return get_object_vars($this);}
		
		public function persitence(){
			if($this->getId()){
				mysql_query("UPDATE astore SET title='".$this->getTitle()."',qaid='".$this->getQaid()."' WHERE id = '".$this->getId()."'");	
			}else{
				mysql_query("INSERT INTO astore(title, qaid) VALUES ('".$this->getTitle()."', '".$this->getQaid()."')");
			}
		}
		
		public static function find($id = null, $table = 'astore', $page = 1, $articlePerPage = 15){
			if($id){
				$astore = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE id = '$id'"));
				if($astore){
					return new AStore_Model($astore);
				}else{
					return null;
				}
			}else{
				$astores = mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT ".($page * $articlePerPage)." OFFSET ".(($page - 1)*$articlePerPage));
				
				$astoreArray = array();
				while($astore = mysql_fetch_array($astores)){
					array_push($astoreArray, new AStore_Model($astore));
				}
				return $astoreArray;
			}
		}

	}
?>