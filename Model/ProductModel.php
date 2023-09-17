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
	public function create($name, $description, $category, $price, $file_path)
	{
		$query = 'INSERT INTO ' . $this->table . '(price, file_path, name, category, description) VALUES (:price, :file_path, :name, :category, :description)';
		return $this->database->fetchAll($query,  [
			'price' => $price,
			'file_path' => $file_path,
			'name' => $name,
			'category' => $category,
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
	public function readPage($page, $limit = 8)
	{

		$query = 'SELECT * FROM ' . $this->table . " LIMIT " . $limit * ($page - 1) . "," . $limit;
		return $this->database->fetchAll($query,  []);
	}
	public function count()
	{
		$query = 'SELECT count(*) as count FROM ' . $this->table;
		$row = $this->database->fetchAll($query,  []);
		return json_encode($row);
	}
	// Update a user
	public function update($id, $name, $description, $category, $price, $file_path)
	{
		$query = 'UPDATE ' . $this->table . ' SET name = :name,description = :description,category = :category,price = :price,file_path = :file_path WHERE id = :id';
		return $this->database->fetchAll($query,  [
			'id' => $id,
			'price' => $price,
			'file_path' => $file_path,
			'name' => $name,
			'category' => $category,
			'description' => $description
		]);
	}

	// Delete a user
	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
		return	$this->database->fetchAll($query,  [
			'id' => $id,

		]);
	}
}
