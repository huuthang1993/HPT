<?php
	class article_model extends core_model{
		private $id = null;
		private $title = "";
		private $author = "";
		private $avatar = "";
		private $album = null;
		private $topic = "";
		private $time = null;
		private $summary = "";
		private $content = "";
		private $confirm = "";
		private $view = 0;
		private $important = 0;
		private $care = 0;
		
		public function __construct($article = null){
			if($article){
				$this->setID($article["ID"]);
				$this->setTitle($article["TITLE"]);
				$this->setAuthor($article["AUTHOR"]);
				$this->setAvatar($article["AVATAR"]);
				$this->setAlbum($article["ALBUM"]);
				$this->setTopic($article["TOPIC"]);
				$this->setTime($article["TIME"]);
				$this->setSummary($article["SUMMARY"]);
				$this->setContent($article["CONTENT"]);
				$this->setConfirm($article["CONFIRM"]);
				$this->setView($article["VIEW"]);
				$this->setImportant($article["IMPORTANT"]);
				$this->setCare($article["CARE"]);
			}
		}
		
		public function getID(){return $this->id;}
		public function setID($id){$this->id = $id;}
		
		public function getTitle(){return $this->title;}
		public function setTitle($title){$this->title = $title;}
		
		public function getAuthor(){return $this->author;}
		public function setAuthor($author){$this->author = $author;}
		
		public function getAvatar(){return $this->avatar;}
		public function setAvatar($avatar){$this->avatar = $avatar;}
		
		public function getAlbum(){return $this->album;}
		public function setAlbum($album){$this->album = $album;}
		
		public function getTopic(){return $this->topic;}
		public function setTopic($topic){$this->topic = $topic;}
		
		public function getTime(){return $this->time;}
		public function setTime($time){$this->time = $time;}
		
		public function getSummary(){return $this->summary;}
		public function setSummary($summary){$this->summary = $summary;}
		
		public function getContent(){return $this->content;}
		public function setContent($content){$this->content = $content;}
		
		public function getConfirm(){return $this->confirm;}
		public function setConfirm($confirm){$this->confirm = $confirm;}
		
		public function getView(){return $this->view;}
		public function setView($view){$this->view = $view;}
		
		public function getImportant(){return $this->important;}
		public function setImportant($important){$this->important = $important;}
		
		public function getCare(){return $this->care;}
		public function setCare($care){$this->care = $care;}
		
		public function getRelative($limit){
			$articleArray = array();
			
			$articleUp = mysql_query("SELECT * FROM CONTENT WHERE ID > $this->id AND TOPIC = '$this->topic' ORDER BY ID DESC LIMIT ".($limit/2));
			$articleDown = mysql_query("SELECT * FROM CONTENT WHERE ID < $this->id AND TOPIC = '$this->topic' ORDER BY ID DESC  LIMIT ".($limit - mysql_num_rows($articleUp)));
			while($article = mysql_fetch_array($articleUp)){
				array_push($articleArray, new Article($article));
			}
			
			while($article = mysql_fetch_array($articleDown)){
				array_push($articleArray, new Article($article));
			}
			
			return $articleArray;
		}
		
		public function persitence(){
			if($this->id){
				if(mysql_query("UPDATE CONTENT SET CONTENT = '$this->content',TITLE='".mysql_real_escape_string($this->title)."',AUTHOR='$this->author',AVATAR='$this->avatar',ALBUM='$this->album',TOPIC='$this->topic',SUMMARY='$this->summary',CONFIRM='$this->confirm',VIEW='$this->view',IMPORTANT='$this->important',CARE='$this->care' WHERE ID = '$this->id'")) echo mysql_error();
			}else{
				mysql_query("INSERT INTO CONTENT (TITLE, AUTHOR, AVATAR, ALBUM, TOPIC, TIME, SUMMARY, CONTENT)
				VALUES ('$this->title', '$this->author', '$this->avatar', '$this->album', '$this->topic', '$this->time', '$this->summary', '$this->content')");
			}
		}
		
		public function delete(){
			return mysql_query("DELETE FROM CONTENT WHERE ID = '$this->id'");
		}
		//--------------------------//
		
		public static function find($id = null, $page = 1, $size = 15, $table = 'CONTENT'){
			if($id){
				$article = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE ID = '$id'"));
				if($article){
					return new Article($article);
				}else{
					return null;
				}
			}else{
				$articleArray = array();

				$articles = mysql_query("SELECT * FROM $table ORDER BY ID DESC  LIMIT ".$size." OFFSET ".(($page - 1)*$articlePerPage));
				while($article = mysql_fetch_array($articles)){
					array_push($articleArray, new Article($article));
				}
				return $articleArray;
			}
		}
		
		public static function findAll($table = 'CONTENT'){
			$articleArray = array();

			$articles = mysql_query("SELECT * FROM $table ORDER BY ID DESC");
			while($article = mysql_fetch_array($articles)){
				array_push($articleArray, new Article($article));
			}
			return $articleArray;
			
		}
		
		public static function rowNum($table = 'CONTENT'){
			return mysql_num_rows(mysql_query("SELECT * FROM $table"));
		}
		
		public static function getBestView($limit = 5, $table = 'CONTENT'){
			$articleArray = array();

			$articles = mysql_query("SELECT * FROM $table ORDER BY VIEW DESC LIMIT $limit");
			while($article = mysql_fetch_array($articles)){
				array_push($articleArray, new Article($article));
			}
			return $articleArray;
		}
		
		public static function getBestCare($limit = 5, $table = 'CONTENT'){
			$articleArray = array();

			$articles = mysql_query("SELECT * FROM $table ORDER BY CARE DESC LIMIT $limit");
			while($article = mysql_fetch_array($articles)){
				array_push($articleArray, new Article($article));
			}
			return $articleArray;
		}
		
		public static function findAritcle($id = null, $table = 'NEWS'){
			if($id){
				$article = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE ID = '$id'"));
				if($article){
					return new Article($article);
				}else{
					return null;
				}
			}else{
				$articleArray = array();

				$articles = mysql_query("SELECT * FROM $table");
				while($article = mysql_fetch_array($articles)){
					array_push($articleArray, new Article($article));
				}
				return $articleArray;
			}
		}
		
		public static function findByAuthor($author = 'Thích Tâm Danh', $limit = 5, $table = 'CONTENT'){
			$articleArray = array();

			$articles = mysql_query("SELECT * FROM $table WHERE AUTHOR like '%$author%' LIMIT $limit");
			while($article = mysql_fetch_array($articles)){
				array_push($articleArray, new Article($article));
			}
			return $articleArray;
		}
		
	}
?>