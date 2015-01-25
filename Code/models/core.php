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

		public static function getNextIndex($table){
			$result = mysql_query("SHOW TABLE STATUS LIKE '".$table."'");
			$row = mysql_fetch_array($result);
			return $row['Auto_increment'];   
		}
		
	}
?>