<?php 

class Login_model {
	private $table='user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	public function getUserById($username, $password)
	{
		$this->db->query('SELECT * FROM user WHERE username =:username AND password=:password');
		$this->db->bind('username', $username);
		$this->db->bind('password', $password);

		$this->db->execute();
		return $this->db->single();	
	}

}
