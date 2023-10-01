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
	public function create($customerid, $address, $sessionarray)
	{
		$query = 'INSERT INTO ' . $this->table . '(customerid address) VALUES (:customerid, :address)';
		$receipt_item_model = new ReceiptItemModel();
		// TODO : Thêm validate vào sau và cho 2 cái cùng một database để cải thiện hiệu su
		foreach ($sessionarray as $key => $value) {
			// Chỗ này hơi phức tạp có thể cỉa thiện thêm
			$receipt_item_model->create($this->count()[0]["count"], $key, $value);
		}
		return $this->database->fetchAll($query,  [
			'customerid' => $customerid,
			'address' => $address,
		]);
	}

	// Read all users
	public function readByUser($id)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE customerid  = :id";
		return $this->database->fetchAll($query,  [
			'id' => $id,
		]);
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
