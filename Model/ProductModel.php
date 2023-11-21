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
	// public function count2()
	// {

	// 	$query = 'SELECT LAST_INSERT_ID() FROM ' . $this->table;
	// 	return $this->database->fetchAll($query,  []);
	// }
	public function readFromArray($array)
	{
		if (count($array) == 0) {
			return [];
		}
		$valueArray = [];

		foreach ($array as $key => $value) {
			$valueArray[] = $key;
		}

		// $query = 'SELECT * FROM ' . $this->table . " WHERE id IN ( 1 ,2 ,3) ";

		$query = 'SELECT * FROM ' . $this->table . " WHERE id IN ( " . implode(", ", $valueArray) . ") ";
		return $this->database->fetchAll($query,  []);
	}
	public function count()
	{
		$query = 'SELECT count(*) as count FROM ' . $this->table;
		$row = $this->database->fetchAll($query,  []);
		return json_encode($row);
	}
	public function count2()
	{
		$query = 'SELECT count(*) as count FROM ' . $this->table;
		return $row = $this->database->fetchAll($query,  []);
		// return json_encode($row);
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
	// Fetch 8 latest product from database
	public function fetchLatest()
	{
		$query = 'SELECT * FROM ' . $this->table . " ORDER BY id DESC LIMIT 8";
		return $this->database->fetchAll($query,  []);
	}

	// Delete a user
	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
		return	$this->database->fetchAll($query,  [
			'id' => $id,

		]);
	}
	public function getLatest($limit = 8)
	{
		$query = 'SELECT * FROM ' . $this->table . " ORDER BY id DESC LIMIT " . $limit;
		return $this->database->fetchAll($query,  []);
	}
	// Có thể xem xét để fetch id từ file config bên ngoài
	public function getRecommend()
	{
		$ids = [10, 12, 7, 9];
		$idList = implode(',', $ids);

		$query = 'SELECT * FROM ' . $this->table . " WHERE id IN ($idList)";
		return $this->database->fetchAll($query,  []);
	}
	public function getcategory($sorttype, $categories)
	{
		#sort type 1: Newest 2: Oldest 3:Highest 4: Lowest
		$categorystring = "";
		// Nếu chuỗi có độ dài bằng 0 thì không làm gì cả vấn là chuỗi rỗng
		if (count($categories) > 0) {


			$categorystring = " WHERE category IN ( '" . implode("', '", $categories) . "') ";
		}
		$sorttypestring	= "";
		switch ($sorttype) {
			case 1:
				$sorttypestring = "id DESC";
				break;
			case 2:
				$sorttypestring = "id ASC";
				break;
			case 3:
				$sorttypestring = "price DESC";
				break;
			case 4:
				$sorttypestring = "price ASC";
				break;
			default:
				$sorttypestring = "id DESC";
				break;
		}
		$query = 'SELECT * FROM ' . $this->table . $categorystring . "ORDER BY " . $sorttypestring;

		return $this->database->fetchAll($query,  []);
	}
}
