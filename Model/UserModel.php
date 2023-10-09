<?php


namespace Model;

use Model\Database;



class UserModel
{
	private $database;
	private $table = 'users';


	public function __construct()
	//TODO: Config Here
	{
		$this->database = new Database(("test"));
	}

	// Create a new user
	public function create($firstname, $lastname, $username, $email, $passwd)
	{
		$query = 'INSERT INTO ' . $this->table . '(username, email, firstname, lastname,	passwd) VALUES (:username, :email, :firstname, :lastname, :passwd)';
		return $this->database->fetchAll($query,  [
			'username' => $username,
			'email' => $email,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'passwd' => $passwd
		]);
	}

	// Read all users
	public function read($username)
	{
		$query = 'SELECT * FROM ' . $this->table . " WHERE username = :username";
		return $this->database->fetchAll($query,  [
			'username' => $username,
		]);
	}
	//return all user form db
	public function readAll()
	{
		$query = 'SELECT * FROM ' . $this->table;
		return $this->database->fetchAll($query,  []);
	}
	//TODO validate session ở đây
	// Update a user
	public function update($firstname, $lastname, $username, $email, $passwd)
	{
		$query = 'UPDATE ' . $this->table . ' SET username = :username,firstname = :firstname,lastname = :lastname,email = :email,passwd = :passwd WHERE username = :username';
		$this->database->fetchAll($query,  [
			'username' => $username,
			'email' => $email,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'passwd' => $passwd
		]);
	}
	//read with pagiantion in page each page have default of 8 .user. the function take 2 paramater page and limit
	public function readPage($page, $limit = 8)
	{
		$query = 'SELECT * FROM ' . $this->table . ' AS count LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit;
		return $this->database->fetchAll($query,  []);
	}


	// Delete a user
	public function delete($username)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE username = :username';
		$this->database->fetchAll($query,  [
			'username' => $username,

		]);
	}
	// return the id of last user in databese
	public function lastid()
	{
		$query = 'SELECT id FROM ' . $this->table . ' ORDER BY id DESC LIMIT 1';
		return $this->database->fetchAll($query,  []);
	}
}
