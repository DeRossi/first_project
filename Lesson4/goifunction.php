<?php
	function giatri_chan_trong_mang(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$arr_chan1[$i] = $arr_1[$i];
			}
		}
		return $arr_chan1;
	}

	function cacvitri_co_GT_am_trong_mang(array $arr_1){
		$flag_GT_am = false;
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] < 0){
				$flag_GT_am = true;
				$arr_am[$i] = $i;
			}
		}
		if($flag_GT_am){
			return $arr_am;
		}else{
			return -1;
		}
	}

	function giatri_max_trong_mang(array $arr_1){
		$max_element = 0;
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] > $arr_1[$max_element]){
				$max_element = $i;
			}
		}
		return $arr_1[$max_element];
	}

	function giatri_duong_dautien_trong_mang(array $arr_1){
		$flag_GTDuong_off = true;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] > 0){
				$flag_GTDuong_off = false;
				$first_plus = $arr_1[$i];
				break;
			}
		}
		if($flag_GTDuong_off){
			return -1;
		}else{
			return $first_plus;
		}
	}

	function so_chan_cuoi_cung(array $arr_1){ //
		$count = count($arr_1);
		$cursor_max = 0;
		foreach ($arr_1 as $key => $value) {
			if($arr_1[$value] > $arr_1[$cursor_max]){
				$cursor_max = $value;
				if($arr_1[$cursor_max] % 2 == 0){
					$max3 = $arr_1[$cursor_max];
				}
			}
		}
		return $max3;
	}

	function vitri_co_giatri_nhonhat(array $arr_1){
		$min = 0;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$min] > $arr_1[$i]){
				$min = $i;
			}
		}
		return $min;
	}

	function vitri_co_giatri_chan_dautien(array $arr_1){
		$test_chan = 0;
		$flag_chan_off = true;
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$flag_chan_off = false;
				$test_chan = $i;
				break;
			}
		}
		if($flag_chan_off){
			return -1;
		}else{
			return $test_chan;
		}
	}
?>


<?php
	echo('Phúc đẹp trai<br>');
?>