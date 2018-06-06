<h3>Classe PDO e o PHP 7</h3>
<p>PDO - DAO</p>

<?php

class Sql extends PDO {

	 private $conn;

	 public function __construct(){

	 	$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	 }

	 public function query($rawQuery, $params = array()) {

	 		$stmt = $this->conn->prepare($RawQuery);

	 		foreach ($params as $key => $value) {
	 			
	 			$stmt->bindParam($key, $value);
	 		}

	 }

}

?>