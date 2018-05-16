<?php

/**
*	basic query handling for mySql/mariadb for cms
*	
*	lite tdg
*
*/
require_once("connection.php");

class dbHandler{
	public static function insertInto($title,$content,$table="posts2"){
		$db=Db::getInstance();
		$now = date("Y-m-d H:i:s");
		$ins= $db->prepare('INSERT INTO '.$table.'  (title,content,datepost) values ("'.$title.'","'.$content.'","'.$now.'")');
		$ins->execute();	
	}
	
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
	
	public static function readID($id,$table="posts2"){
		$result;
		$db=Db::getInstance();
		$sql = 'SELECT * FROM '.htmlentities($table).' WHERE ID = '.intval($id);
		$sel=$db->query($sql);
		$result=$sel->fetch(PDO::FETCH_ASSOC);
		return new uPost($result['ID'],$result['title'],$result['content'],$result['datepost']);
	}
	
	public static function updateID($id,$title,$content,$table="posts2"){
		$db=Db::getInstance();
		$now = date("Y-m-d H:i:s");
		$upd=$db->prepare('UPDATE posts2 SET title="'.$title.'", content="'.$content.'" WHERE ID='.$id);
		var_dump($upd->execute());
				
		
	}
	
	public static function deleteID($criteria="ID",$id,$table="posts2"){
		$db=Db::getInstance();
		$del=$db->prepare('DELETE FROM '.$table.' WHERE '. $criteria.'="'.$id.'"');
		var_dump($del->execute());
		
		
	}
	// DELETE FROM posts2 WHERE title='.$id
}
?>


