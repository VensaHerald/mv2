<?php
/**
*
*basic singleton instance DB connection with DBO
*
*
*/
require_once("deets/deets.php");


 class Db{
	  
	 private static $instance = null;
	 
	 private function __construct(){}
	 private function __clone(){}
	 
	 
	 public static function getInstance(){
		 if(!isset(self::$instance)){
			
			  }
		 
		 return self::$instance;
	 }
	 
 }
 ?>
