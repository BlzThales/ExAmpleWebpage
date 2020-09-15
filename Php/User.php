<?php
session_start();
include "Database.php";

	define ('ERROR_USER_MESSAGE','<script type="text/javascript">alert("Usuário ou senha não encontrado!");</script>');
	define ('ERROR_USER_EXISTS','<script type="text/javascript">alert("Usuário já cadastrado!");</script>');
	define ('ALERT_USER_SAVED', '<script type="text/javascript">alert("Usuário cadastrado com sucesso!");</script>');
	define ('ALERT_USER_LOGGED', '<script type="text/javascript">alert("Usuário logado com sucesso!");</script>');
	define ('ERROR_USER_INVALID','<script type="text/javascript">alert("Usuário Inválido!");</script>');

class User {
	
	private  $username;
	private  $password;
	private  $permissionLevel;
	
	function __construct(){		
	}
	
	public function searchUser( $username ){
		$database = new Database();
		$database -> dbConnect();
		$sqlQuery = "SELECT * FROM users WHERE username = '".$username."'";
		return $database->executeQuery ($sqlQuery);
		
	}
	
	public function createNewUser( $username,  $password ){
		
		if(self::searchUser($username) == TRUE)
			echo (ERROR_USER_EXISTS);
		else if($username == "")
			echo (ERROR_USER_INVALID);
		else{			
			$this->username = $username;
			$this->password= $password;
			$this->permissionLevel = 0;
			
			$database = new Database();
			$database -> dbConnect();
			$sqlQuery = "INSERT INTO users (username,password,permission) VALUES ( '".$username." ', '".$password."' , 0)";
			$database->executeQuery($sqlQuery);
			
			if(self::searchUser($username) == TRUE){
				//echo (ALERT_USER_SAVED);
				header("Location: home.html");
			}			
			else
				echo (ERROR_USER_MESSAGE);
			
		}
	}
	
	public function logInUser( $username, $password ){
		$database = new Database();
		$database -> dbConnect();
		$sqlQuery = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' ;";
		if ($database->executeQuery ($sqlQuery)){			
			header("Location: home.html");
			//echo (ALERT_USER_LOGGED);
		}
		else
			echo (ERROR_USER_MESSAGE);
		
	}
	

	
}

?>