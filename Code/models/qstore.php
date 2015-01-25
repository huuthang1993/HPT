<?php
	class QStore_Model extends Core_Model{
		private $id;
		private $title;
		private $type;
		
		public function __construct($qatore = null){
			if($qatore){
				$this->setId($qatore["id"]);
				$this->setTitle($qatore["title"]);
			}
		}
		
		public function setId($id){$this->id = $id;}
		public function getId(){return $this->id;}
		
		public function setTitle($title){$this->title = $title;}
		public function getTitle(){return $this->title;}
	
		public function getAttrs(){return get_object_vars($this);}

		public function persitence(){
			if($this->getId()){
				mysql_query("UPDATE qstore SET title='".$this->getTitle()."' WHERE id = '".$this->getId()."'");
			}else{
				mysql_query("INSERT INTO qstore(title) VALUES ('".$this->getTitle()."')");
			}
		}
		
		
		public static function find($id = null, $table = 'qstore', $page = 1, $articlePerPage = 15){
			if($id){
				$qatore = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE id = '$id'"));
				if($qatore){
					return new QStore_Model($qatore);
				}else{
					return null;
				}
			}else{
				$qatores = mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT ".($page * $articlePerPage)." OFFSET ".(($page - 1)*$articlePerPage));
				
				$qatoreArray = array();
				while($qatore = mysql_fetch_array($qatores)){
					array_push($qatoreArray, new QStore_Model($qatore));
				}
				return $qatoreArray;
			}
		}		
	}
?>