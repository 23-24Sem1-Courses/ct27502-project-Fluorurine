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

	// Delete a user
	public function delete($username)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE username = :username';
		$this->database->fetchAll($query,  [
			'username' => $username,

		]);
	}
}
