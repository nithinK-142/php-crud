<?php
	/**
	* Database Connection
	*/
	class DbConnect {
		private $server='sql6.freesqldatabase.com';
		private $dbname='sql6705010';
		private $user='sql6705010';
		private $pass='BS9bl7LxQJ';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
        
	}
?>