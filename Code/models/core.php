<?php
	class Core_Model{
		public function __construct($obj = null){			
			if($obj){
				$vars = $this->getAttrs();
				foreach($vars as $key => $var){
					$function = "set".ucfirst($key);
					$this->$function($obj[$key]);
				}
			}
		}
		
	}
?>