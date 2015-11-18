<?php 
/**
* 
*/
class Matrix
{
	public function __construct($e){
		$this->mye = $e;
		$this->data="333";
	}
	

	public function show(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		echo $this->data;
	}

} 

class Evironment{
	public $color;
	function __construct(){
		$this->color ="red";
	}

	function change_color(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		$this->color = "blue";
	}

	function show(){
		echo "<h2>".__CLASS__." >> ".__FUNCTION__."</h2>";
		echo $this->color;
	}
}
?>