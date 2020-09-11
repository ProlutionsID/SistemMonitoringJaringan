<?php
class Gedung_model{
	private $table='gedung';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function select($id_gedung = FALSE) {
		
		if ($id_gedung == FALSE) {
			$this->db->query("SELECT * 
				FROM gedung
				ORDER BY id_gedung DESC");
			return $this->db->resultSet();
		} 
			$this->db->query("SELECT * 
					FROM gedung
					WHERE id_gedung='".$id_gedung."'");
			return $this->db->single();
		
		//return $obj;
	}
	 
	public function add_gedung() {
	    $kode_gedung = $_POST['kode_gedung'];
	    $nama_gedung = $_POST['nama_gedung'];
       
       $this->db->query("INSERT INTO gedung (kode_gedung, nama_gedung) 
	          VALUES ('$kode_gedung', '$nama_gedung')");
	          
	    $this->db->execute();

	    return $this->db->rowCount();
	}

	public function save() {

		//validasi
		$id_gedung = $_POST['id_gedung'];
        $kode_gedung = $_POST['kode_gedung'];
        $nama_gedung = $_POST['nama_gedung'];
		
        $this->db->query("UPDATE gedung SET
        kode_gedung='".$kode_gedung."',nama_gedung='".$nama_gedung."' WHERE id_gedung='".$id_gedung."'");	

      	$this->db->execute();

       	return $this->db->rowCount();
     
	}
	
	public function delete($id_gedung){
		$sql = "DELETE FROM gedung WHERE id_gedung = '$id_gedung'";
		$this->db->sql($sql);
	}
}
?>