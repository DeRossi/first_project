<?php 
require "matrix.php";
/**
* 
*/
class Motion extends Matrix
{
	function __construct($width){
		$this->width = $width;
	}
	function open(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";		
		$this->content = $_SESSION["map"];
		$this->ele = $_SESSION["ele"];
	}

	function move($case){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		switch ($case){
			case "movedown":
				$this->ele["x"]=$this->ele["x"];
				$this->ele["y"]=$this->ele["y"]+1;	
			break;
			case "moveup":
				$this->ele["x"]=$this->ele["x"];
				$this->ele["y"]=$this->ele["y"]-1;	
			break;
			case "moveright":
				$this->ele["x"]=$this->ele["x"]+1;
				$this->ele["y"]=$this->ele["y"];	
			break;
			case "moveleft":
				$this->ele["x"]=$this->ele["x"]-1;
				$this->ele["y"]=$this->ele["y"];	
			break;
		}
	
	}

	function save(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$_SESSION["map"] = $this->content;
		$_SESSION["ele"] = $this->ele;
	}

	function show_motion(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				if($this->ele["x"]==$j && $this->ele["y"]==$i){
					$ele_show = "x";
				}else{
					$ele_show = "";
				}
				echo "<div class='ele_n'>".$ele_show."</div> ";
			}
			echo "<div class='clearfix'></div>";			
		}
	}
}
?>