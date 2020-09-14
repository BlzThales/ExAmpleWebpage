<?php

    define("DB_HOST", "localhost");  
    define("DB_USER", "root");  
    define("DB_PASSWORD", "");  
    define("DB_NAME", "examplewebsitedatabase");

class Database{
	
	
	function __construct(){
	}
	
	public function dbConnect (){
		
		$errors = [];
		
		try{
			$dbConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
		} 
		catch (PDOException $e) {
			array_push ($errors, $e->getMessage());
		}
		
		return $dbConnection;
	}

	public function executeQuery($sqlQuery){		
		$database = NEW Database();
		
		try { 
			$dbConnection = $database->dbConnect();
			$result = $dbConnection->query($sqlQuery);
			
			if($result == NULL)
				$isValid = FALSE;
			else{
				if($result->num_rows == 1)
					$isValid = TRUE;
				else
					$isValid = FALSE;
			}
		}			
		catch (exception $e){ 
			$error = "Error in Database";
			$isValid = FALSE;
		}
				
		return $isValid;
		
	}
	
	

}

?>