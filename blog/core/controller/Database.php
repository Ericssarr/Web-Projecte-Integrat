<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="dbu291364";$this->pass="@lb3rtV1l4rd311";$this->host="db5000509746.hosting-data.io";$this->ddbb="dbs489239";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
