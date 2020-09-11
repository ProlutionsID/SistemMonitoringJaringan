<?php
class Perangkat_model{
	private $table='perangkat';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function select($id_perangkat = FALSE) {
		
		if ($id_perangkat == FALSE) {
			$this->db->query("SELECT * 
				FROM perangkat
				ORDER BY id_perangkat DESC");
			return $this->db->resultSet();
		} 
			$this->db->query("SELECT * 
					FROM perangkat
					WHERE id_perangkat='".$id_perangkat."'");
			return $this->db->single();
		
		//return $obj;
	}
	 
	public function add_perangkat() {
	    $nama_perangkat = $_POST['nama_perangkat'];
	    $ip_perangkat = $_POST['ip_perangkat'];
	    $gedung = $_POST['gedung'];
       
       $this->db->query("INSERT INTO perangkat (nama_perangkat, ip_perangkat, gedung) 
	          VALUES ('$nama_perangkat', '$ip_perangkat', '$gedung')");
	          
	    $this->db->execute();

	    return $this->db->rowCount();
	}

	public function save() {

		//validasi
		$id_perangkat = $_POST['id_perangkat'];
        $nama_perangkat = $_POST['nama_perangkat'];
	    $ip_perangkat = $_POST['ip_perangkat'];
	    $gedung = $_POST['gedung'];
		
        $this->db->query("UPDATE perangkat SET
        nama_perangkat='".$nama_perangkat."',ip_perangkat='".$ip_perangkat."',gedung='".$gedung."' WHERE id_perangkat='".$id_perangkat."'");	

      	$this->db->execute();

       	return $this->db->rowCount();
     
	}
	
	public function delete($id_perangkat){
		$sql = "DELETE FROM perangkat WHERE id_perangkat = '$id_perangkat'";
		$this->db->sql($sql);
	}
}
?>