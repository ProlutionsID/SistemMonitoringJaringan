<?php
class User_model{
	private $table='user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function select($uname = FALSE) {
		
		if ($uname == FALSE) {
			$this->db->query("SELECT * 
				FROM user
				ORDER BY username DESC");
			return $this->db->resultSet();
		} 
			$this->db->query("SELECT * 
					FROM user
					WHERE username='".$uname."'");
			return $this->db->single();
		
		//return $obj;
	}
	 
	public function add_user() {
	    $nama_lengkap = $_POST['nama_lengkap'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $this->db->query("INSERT INTO user (username, password, nama_lengkap, status) 
	          VALUES ('$username', '$password', '$nama_lengkap','Admin')");
	          
	    $this->db->execute();

	    return $this->db->rowCount();
	}

	public function save() {

		//validasi
		$kode_lama = isset($_POST['kode_lama']) ? 
		$_POST['kode_lama'] : '';
		$username = isset($_POST['username']) ? 
		$_POST['username'] : '';
		
		$simpan = true;
		if ($username != $kode_lama) {
			$this->db->query("SELECT *
					FROM user
					WHERE username='".$username."'");
			$obj = $this->db->single();
			if ($obj) {
				$simpan = false;
			}
		}
		
		if ($simpan) {
			if ($_POST['kode_lama'] == '') {
				
			} else {
					$this->db->query("UPDATE user SET
					nama_lengkap='".$_POST['nama_lengkap']."',username='".$_POST['username']."',password='".$_POST['password']."' WHERE username='".$_POST['kode_lama']."'");	
			}

      	$this->db->execute();

       	return $this->db->rowCount();
     
		}
	}
	
	public function delete($uname){
		$sql = "DELETE FROM user WHERE username = '$uname'";
		$this->db->sql($sql);
	}
}
?>