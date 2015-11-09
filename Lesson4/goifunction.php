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

	// Test so nguyen to
	function testsonguyento($no){
		if($no == 2){
			$no++;
			return true;
		}elseif($no == 1 || ($no % 2 == 0)){
			return false;
		}
		for ($i=3; $i <= ceil(sqrt($no)) ; $i= $i+2) {
			if($no % $i == 0){
				return false;
			}
		}
		$no++;
		return true;
	}

	// Bai 132
	function giatri_chan_trong_mang(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$arr_chan1[$i] = $arr_1[$i];
			}
		}
		return $arr_chan1;
	}
	// Bai 133
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
	// Bai 134
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
	// Bai 135
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
	// Bai 136
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
	// Bai 137
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
	// Bai 138
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

	// Bai 144

	// Bai 148
	function so_nguyento_cuoicung(array $arr_1){
		$songuyento = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(testsonguyento($arr_1[$i])){
				$songuyento = true;
				$arr_songuyento[$i] = $arr_1[$i];
				$count_arr_songuyento = count($arr_songuyento);
				for ($j=0; $j < $count_arr_songuyento; $j++) {
					$last_primenumber = $arr_songuyento[$i];
				}
			}
		}
		if($songuyento){
			return $last_primenumber;
		}else{
			return -1;
		}
	}

	// Bai 151
	function so_nguyento_max(array $arr_1){
		$up_arr_songuyento = 0;
		$songuyento = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(testsonguyento($arr_1[$i])){
				$songuyento = true;
				$arr_songuyento[$i] = $arr_1[$i];
				$count_arr_songuyento = count($arr_songuyento);
				for ($j=0; $j < $count_arr_songuyento; $j++) {
					if($arr_songuyento[$i] > $arr_songuyento[$up_arr_songuyento] ){
						$up_arr_songuyento = $i;
					}
				}
			}
		}
		if($songuyento){
			return $arr_songuyento[$up_arr_songuyento];
		}else{
			return 0;
		}
	}

	// Bai 153
	function GT_Chan_min(array $arr_1){
		$chan = false;
		$min = 0;
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$chan = true;
				$min_val = $arr_1[$i];
				$count_arr_chan = count($arr_chan);
				//for ($j=0; $j < $count_arr_chan; $j++) {
				//}
			}
		}
		if($chan){
			return $min_val;
		}else{
			return -1;
		}
	}



	// Bai 154
	function vitri_GT_am_max(array $arr_1){

		return test;
	}

?>


<?php
	echo('Phúc đẹp trai<br>');
?>