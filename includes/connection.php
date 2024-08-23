<?php

class Database {
	private $server   = "mysql:host=localhost;dbname=cpb_main";
	private $username = "CPB";
	private $password = "consumerprotection123/";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,);
	protected $conn;

	public function open() {
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			return $this->conn;
		} catch (PDOException $e) {
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}

	public function close() {
		$this->conn = null;
	}
}

$pdo = new Database();