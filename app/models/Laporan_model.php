<?php
class Laporan_model{
	private $table='status';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	
	public function select($id_status = FALSE) {
		
		if ($id_status == FALSE) {
			$this->db->query("SELECT * FROM `status` JOIN `perangkat` ON status.id_perangkat=perangkat.id_perangkat ORDER BY id_status DESC");
			return $this->db->resultSet();
		} 
			$this->db->query("SELECT * 
					FROM `status` JOIN `perangkat` ON status.id_perangkat=perangkat.id_perangkat
					WHERE id_status='".$id_status."'");
			return $this->db->single();
		
		//return $obj;
    }
    
	public function traffic() {
        $this->db->query("SELECT * 
                FROM `traffic`
                JOIN `client` ON client.id_client=traffic.id_client
                JOIN `status` ON status.id_status=traffic.id_status
                JOIN `perangkat` ON status.id_perangkat=perangkat.id_perangkat");
        return $this->db->resultSet();
        
		//return $obj;
	}
	 
}
?>