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
	
	
}