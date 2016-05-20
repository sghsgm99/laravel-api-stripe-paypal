<?php 

require_once __DIR__ . "/../users/users.conf";	

	require_once __DIR__ . "/../manager/DBManager.php";

	class WUser{
		private $username, $password;
		function __construct($username, $password) {
			$this->username=$username;
			$this->password=$password;
			
		}
		function validate_user(){
			$error_code = false;
			$error_msg = false;
			try{
				$dbh = DBManager::getWhoisAPIUserDBConnection();
			
				if(!$dbh){
					$error_code = 1;
					$error_msg = "Unable to validate user due to database problem";
					return array($error_code, $error_msg);	
				}
				$st = $dbh->prepare("select username from users where username = :username and password = :password");
				$st->bindParam(':username', $this->username, PDO::PARAM_STR);
				$st->bindParam(':password', $this->password, PDO::PARAM_STR);
				$st->execute();
				$result = $st->fetch();
				if(!$result){
					$error_code = 2;
					$error_msg="Invalid username and password combination!";	
				}
			}catch(PDOException $e){
					$error_code = 1;
					$error_msg = "Unable to validate user due to database problem: ".$e->getMessage();
			}
			return array($error_code, $error_msg);			
			
		}
	}
?>