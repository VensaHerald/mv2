<?php

/**
*	basic query handling for mySql/mariadb for cms
*	
*	lite tdg
*
*/
require_once("connection.php");

class dbHandler{
	public static function insertInto(){}
	
	public static function readAll($table="posts2",$order="id"){
		$results=[];
		$db=Db::getInstance();
		$sql = 'SELECT * FROM '.htmlentities($table).' order by '.htmlentities($order);
		$sel=$db->query($sql);
		foreach($sel->fetchAll() as $item):
			$results[] = new uPost($item['ID'],$item['title'],$item['content'],$item['datepost']);
		
		endforeach;
		return $results;
		
		
	}
	
	public static function readID(){
		
		
	}
	
	public static function updateID(){}
	
	public static function deleteID(){}
	
}
?>


