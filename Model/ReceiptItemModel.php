<?php


namespace Model;

use Model\Database;



class ReceiptItemModel
{
	private $database;
	private $table = 'receipt_items';


	public function __construct()
	//TODO: Config Here
	{
		$this->database = new Database(("test"));
	}

	// Create a new user
	//Validate rồi thêm vào 2 bảng dữ liệu
	public function create($receipt_id, $product_id, $quantity, $price)
	{
		$query = 'INSERT INTO ' . $this->table . '(receipt_id, product_id, quantity, price) VALUES (:receipt_id, :product_id, :quantity, :price)';
		return $this->database->fetchAll($query,  [
			'receipt_id' => $receipt_id,
			'product_id' => $product_id,
			'quantity' => $quantity,
			'price' => $price
		]);
	}

	// Read all receipt
	public function read($id)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE receipt_id = :id";
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
	}


	public function count()
	{
		$query = 'SELECT count(*) as count FROM ' . $this->table;
		return $row = $this->database->fetchAll($query,  []);
		// return json_encode($row);
	}
	// Update a user
	// public function update($id, $name, $description, $category, $price, $file_path)
	// {
	// 	$query = 'UPDATE ' . $this->table . ' SET name = :name,description = :description,category = :category,price = :price,file_path = :file_path WHERE id = :id';
	// 	return $this->database->fetchAll($query,  [
	// 		'id' => $id,
	// 		'price' => $price,
	// 		'file_path' => $file_path,
	// 		'name' => $name,
	// 		'category' => $category,
	// 		'description' => $description
	// 	]);
	// }

	// Delete a user
	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE receipt_id = :id';
		return	$this->database->fetchAll($query,  [
			'id' => $id,

		]);
	}
}
