<?php

namespace Model;

use \PDO;
use \PDOException;

class Database

{
	private $host;
	private $dbname;
	private $username;
	private $password;
	private $pdo;
	// Có thể xem xét lấy ra từ file sau
	public function __construct($dbname)
	{
		$this->host = "localhost";
		$this->dbname = $dbname;
		$this->username = "root";
		$this->password = "";

		$this->connect();
	}

	private function connect()
	{
		try {
			$dsn = "mysql:host={$this->host};dbname={$this->dbname}";
			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			];

			$this->pdo = new PDO($dsn, $this->username, $this->password, $options);
		} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage());
		}
	}

	public function query($sql, $params = [])
	{
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($params);
		return $stmt;
	}

	public function fetchAll($sql, $params = [])
	{
		$stmt = $this->query($sql, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// Có thể thêm vào nữa (Sẽ suy nghĩ sau)

	// public function lastInsertId()
	// {
	//   return $this->pdo->lastInsertId();
	// }
}
