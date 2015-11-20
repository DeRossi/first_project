<?php 
require "matrix.php";
/**
* 
*/
class Map_matrix extends Matrix
{
	function __construct($width){
		$this->width = $width;
		$this->element1 = new Elements;
		$this->element2 = new Elements;
	}
	function open(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";		
		$this->content = $_SESSION["map"];
	}



	function save(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$_SESSION["map"] = $this->content;
	}

	function show_motion(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				$ele_show = "";
				if($this->element1->x==$j && $this->element1->y==$i){
					$ele_show = "x";
				}

				if($this->element2->x==$j && $this->element2->y==$i){
					$ele_show = "y";
				}
				echo "<div class='ele_n'>".$ele_show."</div> ";
			}
			echo "<div class='clearfix'></div>";
		}
		echo "<h3>x: ".$this->element1->x."</h3>";
		echo "<h3>y: ".$this->element1->y."</h3>";
	}
}

class Elements{
	public $x;
	public $y;
	function __construct(){
		$this->x=0;
		$this->y=0;
	}

	function move($case){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		switch ($case){
			case "movedown":
				$this->x=$this->x;
				$this->y=$this->y+1;	
			break;
			case "moveup":
				$this->x=$this->x;
				$this->y=$this->y-1;	
			break;
			case "moveright":
				$this->x=$this->x+1;
				$this->y=$this->y;	
			break;
			case "moveleft":
				$this->x=$this->x-1;
				$this->y=$this->y;
			break;
		}	
	}

	function open(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$this->x = $_SESSION["ele"]["x"];
		$this->y = $_SESSION["ele"]["y"];
	}

	function save(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$_SESSION["ele"]["x"] = $this->x;
		$_SESSION["ele"]["y"] = $this->y;
	}

}
?>