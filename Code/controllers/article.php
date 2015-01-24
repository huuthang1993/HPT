<?php
	class article extends core{
		public function view($arg1 = null, $arg2 = null){
			$this->setBody("sdfd");
			$title = $this->getTitle();
			$description = $this->getDescription();
			$body = $this->getBody();
			include "views/index.php";
		}
	}
?>