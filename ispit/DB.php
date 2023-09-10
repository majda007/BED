<?php

class DB {
	
	
	
	private static $_instance; 
	
	private $conn;
    private $query;

	
	public static function getInstance() {
		if(!self::$_instance) { 
			
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	// Constructor
	private function __construct() {
			$this->conn = $pdo;
			
			
			
		//new mysqli($this->_host, $this->_username, 
			//$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
        else
        {
            echo "juhuuuuuspojeniiii";
        }
	}

	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->conn;
	}
}

$db = DB::getInstance();
echo $db;
?>