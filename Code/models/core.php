<?php
	class Core_Model{
		public function __construct($obj = null){
			if($obj){
				$vars = get_object_vars($this);
				
				foreach($vars as $var){
					$function = "set".ucfirst($var);
					var_dump($function);
					$this->$function($obj[$var]);
				}
			}
		}
	}
?>