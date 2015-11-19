<?php
require "interface_matrix.php";
/**
* 
*/
class Matrix implements i_matrix
{
	public $content;
	public function create_matrix(){
		for($i=0;$i<10;$i++){
			for($j=0;$j<10;$j++){
				$this->content[$i][$j]=rand(0,20);
			}
		}
	}

	public function replace_matrix($value,$replace){
		for($i=0;$i<10;$i++){
			for($j=0;$j<10;$j++){
				$this->content[$i][$j]= str_replace($value,$replace,$this->content[$i][$j]);
			}
		}
	}

	public function show_matrix(){
		for($i=0;$i<10;$i++){
			for($j=0;$j<10;$j++){
				echo $this->content[$i][$j]." - ";
			}
			echo "<br>";
		}
	}

}

?>