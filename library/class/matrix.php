<?php 
/**
* 
*/
class Matrix
{
	public function __construct(){
		$this->data="Matrix data";
	}
	
	public function create_evironment($e){
		$this->mye[] = $e;
	}

	public function show(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		echo $this->data;
	}

} 

class Evironment{
	public $color;
	function __construct(){
		$this->id = rand(0,9999);
		$this->color ="red";
	}

	function change_color(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		$this->color = "blue";
	}

	function show(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		echo "<h4>ID:".$this->id."</h4>";
		echo $this->color;
	}
}
?>