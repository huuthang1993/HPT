<?php
	class AStore_Model extends Core_Model{
		private $id;
		private $qaid; //qa id
		
		public function getId(){return $this->id;}
		public function setId($id){$this->id = $id;}
		
		public function getQaid(){return $this->qaid;}
		public function setQaid($qaid){$this->qaid = $qaid;}
		
		public function getAttrs(){return get_object_vars($this);}
		
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