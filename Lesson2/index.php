<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<head>
	<title></title>
</head>
<body>
	<form action="/first_project/Lesson2/index.php" method="POST" role="form">
		<legend>BT 2</legend>
	
		<div class="form-group">
			<label for="">Enter elements of array (0 < n < 50)</label>
			<input type="text" class="form-control" id="" name="txt" placeholder="Ex : 1,2,3">
		</div>
	
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</body>
</html>

<?php
	if(isset($_POST['txt'])){
		//$str = array();
		$str = $_POST['txt']; // Mảng user nhập
		$arr_ = explode(",", $str); // Mảng sau khi đã lọc dấu ,
		$arr_length = count($arr_); // Tổng số pt mảng

		echo("Array you typed : " .$str);
		echo "<pre>";
		print_r($arr_);
		echo "</pre>";

		$arr_max = print_r(max($arr_), true);
		echo("Max element in array (use function max) : " .$arr_max. '<br>');
		$arr_max_2 = 0;
		for ($i = 0; $i < $arr_length; $i++) { 
			if($arr_[$i] >= 50 || $arr_[$i] <= 0){
				header("Location: http://localhost/first_project/Lesson2");
			}
			if($arr_[$i] > $arr_[$arr_max_2]){
				$arr_max_2 = $i;
			}
		}
		echo("Max element in array (use algorithm) : " .$arr_[$arr_max_2]. '<br>');
		echo("Total elements of array : " .$arr_length. '<br>');

		$count_max = 0;
		for($x = 0; $x < $arr_length; $x++) {
			if($arr_[$x] === $arr_max){
				$count_max++;
			}
		}
		echo("Number of appearience of max element : " .$count_max);
	}


?>