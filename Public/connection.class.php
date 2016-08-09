<?php
class DB{
	public static function conn($table){
		$data=!(isset($data))?'default':$data;
		$database= arComp('db.mysql')->read($data);
		$db=$database->table($table);
		return $db;
	}
	public static function queryAll($db){
		$query=$db->queryAll();
		return $query;
	}
}
?>