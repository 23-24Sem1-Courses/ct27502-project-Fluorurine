<?php


namespace Model;

use Model\Database;



class ProductModel
{
	private $database;
	private $table = 'products';


	public function __construct()
	//TODO: Config Here
	{
		$this->database = new Database(("test"));
	}

	// Create a new user
	public function create($name, $description, $price, $file_path)
	{
		$query = 'INSERT INTO ' . $this->table . '(price, file_path, name, description) VALUES (:price, :file_path, :name, :description)';
		return $this->database->fetchAll($query,  [
			'price' => $price,
			'file_path' => $file_path,
			'name' => $name,
			'description' => $description
		]);
	}

	// Read all users
	public function read($id)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE id = :id";
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
	}
	public function readAll()
	{
		$query = 'SELECT * FROM ' . $this->table;
		return $this->database->fetchAll($query,  []);
	}
	//Mặc định limit là 20
	public function readPage($page, $limit = 200)
	{

		$query = 'SELECT * FROM ' . $this->table . " LIMIT " . $limit * ($page - 1) . "," . $limit;
		return $this->database->fetchAll($query,  []);
	}

	// Update a user
	public function update($id, $name, $description, $price, $file_path)
	{
		$query = 'UPDATE ' . $this->table . ' SET name = :name,description = :description,price = :price,file_path = :file_path WHERE id = :id';
		$this->database->fetchAll($query,  [
			'id' => $id,
			'price' => $price,
			'file_path' => $file_path,
			'name' => $name,
			'description' => $description
		]);
	}

	// Delete a user
	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
		$this->database->fetchAll($query,  [
			'id' => $id,

		]);
	}
}
