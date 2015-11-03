<?php
	if ($_POST['txt'] >= 50) {
		?>
		<script type="text/javascript">alert("Please enter n : 0 < n <50");</script><?php
		header("Location: http://localhost/first_project/Lesson2");
	}elseif ($_POST['txt'] > 0 && $_POST['txt'] < 50) {
		/*for ($i=0; $i <= $_POST['txt']; $i++) { 
			if($i !=0){
				echo " , " .$i;
			}elseif ($i === 0) {
				echo $i;
			}
		}*/
	}
	$str = array();
	$str = $_POST['txt'];
	echo("Array you typed : " .$str);
	echo "<pre>";
	print_r(explode(",", $str));
	echo "</pre>";

	$arr_max = print_r(max(explode(",", $str)), true);
	echo("Max element in array : " .$arr_max. '<br>');

	$arr_ = explode(",", $str);
	$arr_length = count($arr_);
	echo("Total elements of array : " .$arr_length. '<br>');

	$count_max = 0;
	for($x = 0; $x < $arr_length; $x++) {
		if($arr_[$x] === $arr_max){
			$count_max++;
		}
	}
	echo("Number of appearience of max element : " .$count_max);

?>