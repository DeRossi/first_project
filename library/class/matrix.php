<?php
require "interface_matrix.php";
/**
*
*/
class Matrix implements i_matrix
{
	public $content;
	private $width;

	function __construct($width){
		$this->width = $width;
	}

	public function create_matrix($case=""){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		switch($case){
			case "normal":
				$this->create_matrix_normal();
			break;
			default:
				$this->create_matrix_rand();
			break;
		}
	}

	private function create_matrix_normal(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$dem = 0;
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				$this->content[$i][$j]= $dem;
				$dem++;
			}
		}
	}

	private function create_matrix_rand(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				$this->content[$i][$j]= rand(0,100)-50;
			}
		}
	}

	public function route_right(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$w= $this->width;
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				$new_array[$j][($w-1)-$i] = $this->content[$i][$j];
			}
		}
		$this->content = $new_array;
	}

	public function route_left(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$w= $this->width;
		for($i=0;$i<$this->width;$i++){//cột
			for($j=0;$j<$this->width;$j++){//hàng
				$new_array[$j][$i] = $this->content[$i][($w-1)-$j];
			}
		}
		$this->content = $new_array;
	}

	public function symmetry(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$w= $this->width;
		for($i=0;$i<$this->width;$i++){//cột
			for($j=0;$j<$this->width;$j++){//hàng
				$new_array[$i][$j] = $this->content[$i][($w-1)-$j];
			}
		}
		$this->content = $new_array;
	}

	public function bubblesort(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		$w = $this->width;
		for ($i=0; $i < ($w*$w-1); $i++) {
			for ($j=$i+1; $j < ($w*$w); $j++) {
				if($this->content[$i/$w][$i%$w] > $this->content[$j/$w][$j%$w]){
					$tmp = $this->content[$i/$w][$i%$w];
					$this->content[$i/$w][$i%$w] = $this->content[$j/$w][$j%$w];
					$this->content[$j/$w][$j%$w] = $tmp;
				}
			}
		}
	}

	public function replace_matrix($value,$replace){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				$this->content[$i][$j]= str_replace($value,$replace,$this->content[$i][$j]);
			}
		}
	}

	public function show_matrix(){
		echo "<h1>".__CLASS__." > ".__FUNCTION__."</h1>";
		for($i=0;$i<$this->width;$i++){
			for($j=0;$j<$this->width;$j++){
				if($this->content[$i][$j]>0){
					if($this->content[$i][$j]>25){
						$color="#9729B1";
					}else{
						$color="#963A3A";
					}
				}else{
					if($this->content[$i][$j]< -25){
						$color="#07DA2C";
					}else{
						$color="#264A3A";
					}
				}
				echo "<div style='background:".$color."' class='ele_n'>".$this->content[$i][$j]."</div> ";
			}
			echo "<div class='clearfix'></div>";			
		}
		print_r($_SESSION);
	}

}

?>