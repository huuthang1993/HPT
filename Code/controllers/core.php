<?php
	class Core{
		private $title;
		private $body;
		private $description;
		
		public function __construct(){
			
		}
		
		public function setTitle($title){$this->title = $title;}
		public function getTitle(){return $this->title;}
		
		public function setBody($body){$this->body = $body;}
		public function getBody(){return $this->body;}
		
		public function setDescription($description){$this->description = $description;}
		public function getDescription(){return $this->description;}
		
		public function getAccount(){
			$acc = split("_", $_COOKIE["acc"]);
			return User_Model::findByUserAndPassword(md5($acc[0]), md5($acc[1]));
		}
	}
?>