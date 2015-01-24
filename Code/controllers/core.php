<?php
	class core{
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
	}
?>