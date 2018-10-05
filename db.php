<?php 
include ('config.php');
 

class db  
{
	public static $connection = NULL;
	public function __construct()
	{
		if (!self::$connection) {
			self::$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		}
	}


	public function query($sql){

		$data= mysql_query(self::$connection, $sql);
		return $data;
	}


	public function select($sql){

		$data = $this->query($sql);

		$rows = [];
		while ($row = mysql_fetch_assoc($data)) {
			$rows[] = $row;
		}
		return $rows;
	}




}


 ?>