<?php

/**
*	basic query handling for mySql/mariadb for cms
*	
*	lite tdg
*
*/
require_once("model/connection.php");

class dbHandler{
	public static function insertInto(){}
	
	public static function readAll($table="posts2"){
		$results=[];
		$db=Db::getInstance();
		// $sql = 'SELECT * FROM '.htmlentities($table);
		// $sel= $db->prepare($sql);
		// $sel->execute();
		$sel=$db->query('select * from posts2');
		
		foreach($sel->fetchAll() as $item):
			$results[] = new uPost($item['ID'],$item['title'],$item['content'],$item['datepost']);
		
		endforeach;
		return $results;
		
		
	}
	
	public static function readID(){}
	
	public static function updateID(){}
	
	public static function deleteID(){}
	
}
?>


