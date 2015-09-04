<?php
class mysql {
                
    public function __construct($host, $user, $passwort, $dbname) { 
		$host 	= "127.0.0.1"; 
		$user 	= "gcmserver"; 
		$pass 	= "gcmserver"; 
		$dbname = "gcmserverdb"; 

		$result = mysql_connect($host, $user, $pass, $dbname);
		if (!$result) {
			echo "Could not connect to server<br>";
		} else {
			// echo "Connection established<br>"; 
		}
		
		$result = mysql_select_db($dbname);
		if (!$result) {
			echo "Cannot select database<br>";
		} else {
			// echo "Database selected<br>";
		}
        
    } 
     
             
    public function query($sqlcode) { 
		$result = mysql_query($sqlcode);    
		
		if (!$result) {
			echo "Could not execute query: $sqlcode<br>";
		} else {
			// echo "Query: $sqlcode executed<br>";
		} 

		return $result;


		
	}   
    
        
         
     
}     