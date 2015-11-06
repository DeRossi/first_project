<?php
	function giatri_chan_trong_mang(array $arr_1){
		for ($i=0; $i < count($arr_1) ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$arr_chan1[$i] = $arr_1[$i];
			}
		}
		return $arr_chan1;
	}

	function giatri_max_trong_mang($arr_1){
		$max_element = 0;
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] > $arr_1[$max_element]){
				$max_element = $i;
			}
		}
		return $arr_1[$max_element];
	}

	function so_chan_cuoi_cung(array $arr_1){

	}

?>