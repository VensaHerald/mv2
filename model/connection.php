<?php
/**
*
*basic singleton instance DB connection with DBO
*
*
*/



 class Db{
	 require_once("deets/deets.php");
	 
	 private static $instance = null;
	 
	 private function __construct(){}
	 private function __clone(){}
	 
	 
	 public static function getInstance(){
		 if(!isset(self::$instance)){
			 
			 $instance = new PDO('mysql:host=localhost;dbname=mvcrud',$user,$pass);
		 }
		 
		 return self::$instance;
	 }
	 
 }