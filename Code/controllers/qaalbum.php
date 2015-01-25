<?php
	class QAAlbum{
		private $id;
		private $quid;//question user id
		private $auid;//answer user id
		private $like;
		private $status;
		
		public function getId(){return $this->id;}
		public function setId($id){$this->id = $id;}
		
		public function getQuid(){return $this->quid;}
		public function setQuid($quid){$this->quid = $quid;}

		public function getAuid(){return $this->auid;}
		public function setAuid($auid){$this->auid = $auid;}
		
		public function getLike(){return $this->like;}
		public function setLike($like){$this->like = $like;}		
		
		public function getStatus(){return $this->status;}
		public function setStatus($status){$this->status = $status;}		
		
		public static function find($id = null, $table = 'qaalbum', $page = 1, $articlePerPage = 15){
			if($id){
				$qaalbum = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE id = '$id'"));
				if($qaalbum){
					return new QAAlbum($qaalbum);
				}else{
					return null;
				}
			}else{
				$qaalbums = mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT ".($page * $articlePerPage)." OFFSET ".(($page - 1)*$articlePerPage));
				
				$qaalbumArray = array();
				while($qaalbum = mysql_fetch_array($qaalbums)){
					array_push($qaalbumArray, new QAAlbum($qaalbum));
				}
				return $qaalbumArray;
			}
		}
		
	}
?>