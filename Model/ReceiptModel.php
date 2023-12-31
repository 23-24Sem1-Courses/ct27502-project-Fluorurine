<?php


namespace Model;

use Model\Database;

use Model\ReceiptItemModel;


class ReceiptModel
{
	private $database;
	private $table = 'receipts';


	public function __construct()
	//TODO: Config Here
	{
		$this->database = new Database(("test"));
	}

	// Create a new user
	//Validate rồi thêm vào 2 bảng dữ liệu
	public function create($sessionarray, $address, $customerid)
	{
		//validate address with htmlspecialchar
		$address = htmlspecialchars($address);
		$query = 'INSERT INTO ' . $this->table . '(userid, address) VALUES (:customerid, :address)';
		$receipt_item_model = new ReceiptItemModel();
		$this->database->fetchAll($query,  [
			'customerid' => $customerid,
			'address' => $address,
		]);

		$receiptcount = $this->maxId()[0]["max"];
		$price = [];
		foreach ($sessionarray as $key => $value) {
			$price[] = $key;
		}

		$pricearray = $this->getPrice($price);

		foreach ($sessionarray as $key => $value) {

			$receipt_item_model->create($receiptcount, $key, $value, $pricearray[$key]["price"]);
			$_SESSION['cart'] = array();
		}
		return;
	}
	public function readfromReceiptItem($id)
	{
		$query = 'SELECT * FROM receipt_items WHERE receipt_id = :id';
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
	}
	// Read all users
	public function readByUser($id)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE userid  = :id";
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
	}
	public function readAll()
	{
		$query = 'SELECT * FROM ' . $this->table;
		return $this->database->fetchAll($query,  []);
	}
	public function readById($id)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE id  = :id";
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
	}
	// read the id in as array and return the corressponding id and price of the product have id in that array
	public function getPrice($id)
	{
		$query = 'SELECT id, price FROM products WHERE id IN (' . implode(',', $id) . ')';
		$result = $this->database->fetchAll($query,  []);
		// return it as key value
		$returnarray = [];
		foreach ($result as $key => $value) {
			$returnarray[$value["id"]] = $value;
		}
		return $returnarray;
	}
	public function maxId()
	{
		$query = 'SELECT MAX(id) as max FROM ' . $this->table;
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
		return $row = $this->database->fetchAll($query,  []);
		// return json_encode($row);
	}
	// Update a recuepit
	// Hoá đơn không nên được xoá hay sửa.
	// Delete a recuepit
	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
		return	$this->database->fetchAll($query,  [
			'id' => $id,

		]);
	}

	// Có thể xem xét để fetch id từ file config bên ngoài


}
