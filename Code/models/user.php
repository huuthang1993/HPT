<?php
	class User_Model extends Core_Model{
		private $id;
		private $name;
		private $username;
		private $password;
		private $phone;
		private $mail;
		private $sex;
		private $birthday;
		
		public function __construct($user = null){
			if($user){
				$this->setId($user["id"]);
				$this->setName($user["name"]);
				$this->setUsername($user["username"]);
				$this->setPassword($user["password"]);
				$this->setPhone($user["phone"]);
				$this->setMail($user["mail"]);
				$this->setSex($user["sex"]);
				$this->setBirthday($user["birthday"]);
			}
		}
		
		public function setId($id){$this->id = $id;}
		public function getId(){return $this->id;}
		
		public function setName($name){$this->name = $name;}
		public function getName(){return $this->name;}
		
		public function setUsername($username){$this->username = $username;}
		public function getUsername(){return $this->username;}
		
		public function setPassword($password){$this->password = $password;}
		public function getPassword(){return $this->password;}
		
		public function setPhone($phone){$this->phone = $phone;}
		public function getPhone(){return $this->phone;}
		
		public function setMail($mail){$this->mail = $mail;}
		public function getMail(){return $mail;}
		
		public function setSex($sex){$this->sex = $sex;}
		public function getSex(){return $this->sex;}
		
		public function setBirthday($birthday){$this->birthday = $birthday;}
		public function getBirthday(){return $this->birthday;}
		
		public function getAttrs(){return get_object_vars($this);}
		
		public static function find($id = null, $table = 'user', $page = 1, $articlePerPage = 15){
			if($id){
				$user = mysql_fetch_array(mysql_query("SELECT * FROM $table WHERE id = '$id'"));
				if($user){
					return new User_Model($user);
				}else{
					return null;
				}
			}else{
				$users = mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT ".($page * $articlePerPage)." OFFSET ".(($page - 1)*$articlePerPage));
				
				$userArray = array();
				while($user = mysql_fetch_array($users)){
					array_push($userArray, new User_Model($user));
				}
				return $userArray;
			}
		}
		
		public static function findByUserAndPassword($user_md5_md5, $password_md5_md5){
			$user = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE md5(md5(username)) = '$user_md5_md5' AND md5(md5(password)) = '$password_md5_md5'"));
			if($user)
				return new User_Model($user);
			else 
				return null;
		}
	}
?>