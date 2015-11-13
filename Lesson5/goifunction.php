<?php
	// Goi random array
	function create_rand_array_sothuc(array $arr){
		for($i=0;$i<100;$i++){
			$array[$i] = rand(0,1000)/100;
		}
		return $array;
	}

	function create_rand_array_songuyen(array $arr){
		for($i=0;$i<100;$i++){
			$array[$i] = 500-rand(0,1000);
		}
		return $array;
	}

	// Bai 181 : Viết hàm liệt kê các GT chẵn có ít nhất một lân cận cũng là GT chẵn
	function gt_chan_lancan_chan(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] % 2 == 0){
				if($i == 0){
					continue;
				}elseif (($arr_1[$i-1] % 2 == 0) || ($arr_1[$i + 1] % 2 == 0)) {
					$arr_chan[] = $arr_1[$i];
				}
			}
		}
		return $arr_chan[];
	}

	// Bai 200 : Tính tổng các phần tử trong mảng
	function total_of_elements(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			$arr_total[] += $arr_1[$i];
		}
		return $arr_total[];
	}

	// Bai 201 : Tính tổng các GT dương trong mảng 1 chiều các số thực
	function total_gt_duong(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] > 0){
				$arr_total[] += $arr_1[$i];
			}
		}
		return $arr_total[];
	}
?>