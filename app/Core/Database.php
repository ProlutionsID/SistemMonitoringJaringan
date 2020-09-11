<?php 

class Database {
	
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $stmt;

	public function __construct()
	{
		$dsn= 'mysql:host='. $this->host .';dbname='. $this->db_name;

		$option=[
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch(PDOException $e){
			die ($e->getMessage());
		}
	}
	public function query($query)
	{
		$this->stmt=$this->dbh->prepare($query);
	}
	public function bind($param, $value, $type = null)
	{
		if( is_null($type)){
			switch ( true ) {
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}			
	public function execute()
	{
		$this->stmt->execute();
	}
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO:: FETCH_ASSOC);	
	}
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
	public function lastInsertId()
	{
		return $this->dbh->lastInsertId();
	}
	// select = single (menampilkan data berdasarkan id)
	// PDO::FETCH_OBJ -> untuk menampilkan data (->) ex : $data['bayar']->nama_penyewa;
	// PDO::FETCH_ASSOC -> untuk menampilkan data (['']) ex : $data['bayar']['nama_penyewa'];
	public function select($query){
		try{
			$this->stmt = $this->dbh->prepare($query);
			$this->stmt->setFetchMode(PDO::FETCH_OBJ);
			$this->stmt->execute();
				
			$obj = $this->stmt->fetch();
				
			$this->stmt->closeCursor();
		}catch(PDOException $ex){
			$ex->getMessage();
			exit();
		}
		return $obj;
	}
	// selectAll = resultSet (menampilkan semua data)
	public function selectAll($sql){
		$arr = [];
		try{
			$this->stmt = $this->dbh->prepare($sql);
			$this->stmt->setFetchMode(PDO::FETCH_OBJ);
			$this->stmt->execute();
				
			while(($obj = $this->stmt->fetch()) == true){
				$arr[] = $obj;
			}
				
			$this->stmt->closeCursor();
		}catch(PDOException $ex){
				$ex->getMessage();
				exit();
		}
		return $arr;
	}
	// sql = query (perintah semua data)
	public function sql($sql){
		try{
			$this->stmt = $this->dbh->prepare($sql);
			$this->stmt->execute();
				
			$this->stmt->closeCursor();
		}catch(PDOException $ex){
			echo $ex->getMessage();
			exit();
		}
	}
	public function performQuery($sql){
	    $this->stmt = $this->dbh->prepare($sql);
	    if($this->stmt->execute()){
	        return true;
        }else{
            return false;	        
        }
	}

}