<?php
	//function create_rand_array_sothuc(array $arr)
	//function create_rand_array_songuyen(array $arr)
	//function testsonguyento($no)
	//function giatri_chan_trong_mang(array $arr_1)
	//function cacvitri_co_GT_am_trong_mang(array $arr_1)
	//function giatri_max_trong_mang(array $arr_1)
	//function giatri_duong_dautien_trong_mang(array $arr_1)
	//function so_chan_cuoi_cung(array $arr_1){ /
	//function vitri_co_giatri_nhonhat(array $arr_1)
	//function vitri_co_giatri_chan_dautien(array $arr_1)
	//function so_nguyento_dautien(array $arr_1)
	//function so_nguyento_cuoicung(array $arr_1)
	//function so_nguyento_max(array $arr_1)
	//function GT_Chan_min(array $arr_1)
	//function vitri_GT_am_max(array $arr_1)
	
	// Goi random array
	function create_rand_array_sothuc(array $arr){
		for($i=0;$i<100;$i++){
			$array[$i] = rand(0,1000)/100;
		}
		return $array;
	}

	function create_rand_array_songuyen(){
		for($i=0;$i<12;$i++){ //100
			$array[$i] = 500-rand(0,1000);
		}
		return $array;
	}

	// Test so nguyen to
	function testsonguyento($no){
		if($no == 2){
			$no++;
			return true;
		}elseif($no == 1 || ($no % 2 == 0) || ($no < 0)){
			return false;
		}
		for ($i=3; $i <= ceil(sqrt($no)) ; $i= $i+2) {
			if($no % $i == 0 || ($no < 0)){
				return false;
			}
		}
		$no++;
		return true;
	}

	// Bai 132 : Tìm các Giá trị chẵn trong mảng
	function giatri_chan_trong_mang(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] % 2 == 0){
				$arr_chan1[$i] = $arr_1[$i];
			}
		}
		return $arr_chan1;
	}
	// Bai 133 : Tìm Các vị trí có giá trị âm trong mảng
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
	// Bai 134 : Tìm Giá trị max trong mảng
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
	// Bai 135 : Giá trị dương đầu tiên trong mảng (Nếu mảng ko có giá trị dương thì trả về -1)
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
	// Bai 136 : Tìm Số chẵn cuối cùng
	function so_chan_cuoi_cung(array $arr_1){ //
		$count = count($arr_1);
		$cursor_max = 0;
		/*foreach ($arr_1 as $key => $value) {
			if($arr_1[$value] > $arr_1[$cursor_max]){
				$cursor_max = $value;
				if($arr_1[$cursor_max] % 2 == 0){
					$max3 = $arr_1[$cursor_max];
				}
			}
		}*/
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] % 2 == 0){
				$max3 = $arr_1[$i];
			}
		}
		return $max3;
	}
	// Bai 137 : Vị trí có giá trị nhỏ nhất
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
	// Bai 138 : Vị trí có giá trị chẵn đầu tiên (Nếu không có giá trị chẵn thì trả về -1)
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

	// Bai 144 : Số nguyên tố đầu tiên trong mảng (Nếu không có thì trả về -1)
	function so_nguyento_dautien(array $arr_1){
		$songuyento = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(testsonguyento($arr_1[$i])){
				$songuyento = true;
				$arr_songuyento = $arr_1[$i];
				break;
			}
		}
		if($songuyento){
			return $arr_songuyento;
		}else{
			return -1;
		}
	}

	// Bai 148 : Số nguyên tố cuối cùng trong mảng (Nếu không có thì trả về -1)
	function so_nguyento_cuoicung(array $arr_1){
		$songuyento = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(testsonguyento($arr_1[$i])){
				$songuyento = true;
				$arr_songuyento = $arr_1[$i];
			}
		}
		if($songuyento){
			return $arr_songuyento;
		}else{
			return -1;
		}
	}

	// Bai 151 : Số nguyên tố lớn nhất trong mảng (Nếu mảng ko có số nguyên tố thì trả về 0)
	function so_nguyento_max(array $arr_1){
		$up_arr_songuyento = 0;
		$songuyento = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(testsonguyento($arr_1[$i])){
				$songuyento = true;
				if($arr_1[$i] > $arr_1[$up_arr_songuyento] ){
					$up_arr_songuyento = $i;
				}
			}
		}
		if($songuyento){
			return $arr_1[$up_arr_songuyento];
		}else{
			return 0;
		}
	}

	// Bai 153 : Giá trị chẵn nhỏ nhất trong mảng (Nếu không có GT chẵn thì trả về -1)
	function GT_Chan_min(array $arr_1){
		$chan = false;
		$count = count($arr_1);
		$max = ($count-1);
		for ($i=($count-1); $i >= 0 ; $i--) {
			if($arr_1[$i] % 2 == 0){
				$chan = true;
				if($arr_1[$max] > $arr_1[$i]){
					$chan_min = $arr_1[$i];
				}
			}
		}
		if($chan){
			return $chan_min;
		}else{
			return -1;
		}
	}

	// Bai 154 : Vị trí có giá trị âm lớn nhất (Nếu không có GT thì trả về -1)
	function vitri_GT_am_max(array $arr_1){
		$min = 0;
		$soam = false;
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if(($arr_1[$min] > $arr_1[$i])&&($arr_1[$i] < 0)){
				$soam = true;
				$min = $i;
			}
		}
		if($soam){
			return $min;
		}else{
			return -1;
		}
	}

	// Bai 181 : Viết hàm liệt kê các GT chẵn có ít nhất một lân cận cũng là GT chẵn
	function gt_chan_lancan_chan(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] % 2 == 0){
				if($i == 0 || $i == ($count - 1)){
					continue;
				}elseif (($arr_1[$i-1] % 2 == 0) || ($arr_1[$i + 1] % 2 == 0)) {
					$arr_chan[] = $arr_1[$i];
				}
			}
		}
		return $arr_chan;
	}

	// Bai 200 : Tính tổng các phần tử trong mảng
	function total_of_elements(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			$arr_total += $arr_1[$i];
		}
		return $arr_total;
	}

	// Bai 201 : Tính tổng các GT dương trong mảng 1 chiều các số thực
	function total_gt_duong(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count; $i++) {
			if($arr_1[$i] > 0){
				$arr_total += $arr_1[$i];
			}
		}
		return $arr_total;
	}

	// Bai 257 : Sắp xếp các GT tại các vị trí lẻ trong mảng tăng dần, các vị trí khác giữ nguyên GT và vị trí
	function sort_VT_le_tangdan(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($i % 2 != 0){
				for ($j=$i+2; $j <= $count ; $j+=2) {
					if($arr_1[$i] > $arr_1[$j]){
						$tmp = $arr_1[$j];
						$arr_1[$j] = $arr_1[$i];
						$arr_1[$i] = $tmp;
					}
				}
			}
		}
		return $arr_1;
	}

	// Bai 261 : Săp xếp các số dương trong mảng tăng dần các số âm giữ VT
	function sort_GT_duong_tangdan(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			if($arr_1[$i] > 0){
				for ($j=$i+1; $j <= $count ; $j++) {
					if($arr_1[$j] > 0){
						if($arr_1[$i] > $arr_1[$j]){
							$tmp = $arr_1[$j];
							$arr_1[$j] = $arr_1[$i];
							$arr_1[$i] = $tmp;
						}
					}
				}
			}
		}
		return $arr_1;
	}

	// Bai 263 : Sắp xếp các số dương trong mảng tăng dần, số âm giảm dần, vị trí tương đối âm dương ko đổi
	function duongtang_amgiam(array $arr_1){
		$count = count($arr_1);
		for ($i=0; $i < $count ; $i++) {
			for ($j=$i+1; $j <= $count ; $j++) {
				if($arr_1[$j] > 0 && $arr_1[$i] > 0){
					if($arr_1[$i] > $arr_1[$j]){
						$tmp = $arr_1[$j];
						$arr_1[$j] = $arr_1[$i];
						$arr_1[$i] = $tmp;
					}
				}elseif ($arr_1[$j] < 0 && $arr_1[$i] < 0) {
					if($arr_1[$i] < $arr_1[$j]){
						$tmp = $arr_1[$j];
						$arr_1[$j] = $arr_1[$i];
						$arr_1[$i] = $tmp;
					}
				}
			}
		}
		return $arr_1;
	}


	// MATRIX
	function create_rand_matrix_array_songuyen($rong, $dai){
		for($i=0;$i< $rong;$i++){
			for ($j=0; $j < $dai; $j++) {
				$array[$i][$j] = 500-rand(0,1000);
			}
		}
		return $array;
	}

	function create_rand_matrix_array_sothuc(){
		for($i=0;$i<10;$i++){
			for ($j=0; $j < 10; $j++) {
				$array[$i][$j] = rand(0,1000)/100;
			}
		}
		return $array;
	}

	function create_rand_sort_matrix_array_sothuc(){ // i : rộng - j : dài
		//$array[$i][$j] = 500-rand(0,500);
		for($i=0; $i < 10; $i++){
			for ($j=0; $j < 10; $j++) {
				$array[$i][$j] = rand(0,1000)/100;
			}
		}
		return $array;
	}

	/*function bubblesort(){
		$array = create_rand_sort_matrix_array_sothuc();
		for ($k=0; $k < 5; $k++) {
			for ($i=0; $i < (5-1); $i++) {
				for ($j=(5-1); $j > $i; $j--) {
					if($array[$k][$j] < $array[$k][$j-1]){
						$tmp = $array[$k][$j];
						$array[$k][$j] = $array[$k][$j-1];
						$array[$k][$j-1] = $tmp;

						$array_sort[] = $array[$k][$j-1];
					}
				}
			}
		}
		return $array;
	}*/
	function bubblesort(){
		$array = create_rand_sort_matrix_array_sothuc();
		for ($i=0; $i < (10*10-1); $i++) {
			for ($j=$i+1; $j < (10*10); $j++) {
				if($array[$i/10][$i%10] > $array[$j/10][$j%10]){
					$tmp = $array[$i/10][$i%10];
					$array[$i/10][$i%10] = $array[$j/10][$j%10];
					$array[$j/10][$j%10] = $tmp;
				}
			}
		}
		return $array;
	}

	function create_rand_matrix_array_songuyento(){ //
		for($i=0;$i<100;$i++){
			for ($j=0; $j < 100; $j++) {
				$array[$i][$j] = rand(0,500);
			}
		}
		return ($array);
	}

	function test($cao){
		for ($x=1; $x <= $cao; $x++) {
			for ($j=0; $j < $cao-$x; $j++) {
				echo " ";
			}
			for ($j=0; $j < $x; $j++) {
				echo("Happy ★");
			}
			echo "\n";
		}
	}

	function testsonguyento_2($no){
		if($no == 2){
			$no++;
			return true;
		}elseif($no == 1 || ($no % 2 == 0) || ($no < 0)){
			return false;
		}
		for ($i=3; $i <= ceil(sqrt($no)) ; $i= $i+2) {
			if($no % $i == 0 || ($no < 0)){
				return false;
			}
		}
		$no++;
		return true;
	}

	function create_matrix(){ // 1 - 100
		$count = 0; $count++;
		for($i=0; $i < 10; $i++){
			for ($j=0; $j < 10; $j++) {
				//$array[$i][$j] = ($i * 10) + ($j + 1);
				$array[$i][$j] = $count;
				$count++;
			}
		}
		return ($array);
	}

	function rotate_left(){
		$array = create_matrix();
		for ($i=0; $i < 10; $i++) {
			for ($j=0; $j < 10; $j++) {
				$array_rotate[$i][$j] = $array[$j][10 - 1 - $i]; //hang
			}
		}
		return $array_rotate;
	}

	function rotate_right(){
		$array = create_matrix();
		for ($i=0; $i < 10; $i++) {
			for ($j=0; $j < 10; $j++) {
				$array_rotate[$i][$j] = $array[10 -1 - $j][$i]; //cot
			}
		}
		return $array_rotate;
	}

	function matrix_doixung(){
		//$array
	}
?>


<?php
	echo('Phúc đẹp trai<br>');
?>