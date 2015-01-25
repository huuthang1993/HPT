<?php
	class Core_View{
		private $title;
		private $description;
		private $body;
		
		public function setTitle($title){$this->title = $title;}
		public function getTitle(){return $this->title;}
		
		public function setDescription($description){$this->description = $description;}
		public function getDescription(){return $this->description;}		
		
		public function setBody($body){$this->body = $body;}
		public function getBody(){return $this->body;}
				
	}
?>
