<?php

class uPost {
	public $id;
	public $title;
	public $content;
	public $datepost;
	
	public function __construct($id,$title,$content,$datepost){
		$this->id=$id;
		$this->title=$title;
		$this->content=$content;
		$this->datepost=$datepost;
	}
	private function __clone(){}
	
	
	public function validateCr($title,$content){
		$errors=[];
		
		
		
		
		return new uPost();
	}
	
	
}