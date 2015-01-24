<?php
	class core{
		private $title = '';
		private $body = '';
		private $description = '';
		
		public function getTitle(){return $this->title;}
		public function setTitle($title){$this->title = $title;}
		
		public function getBody(){return $this->body;}
		public function setBody($body){$this->body = $body;}
		
		public function getDescription(){return $this->description;}
		public function setDescription($description){$this->description = $description;}
	
	}
?>