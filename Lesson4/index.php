<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class="container">
<div class="navbar">
	<a class="navbar-brand" href="/">Happy</a>
	<ul class="nav navbar-nav">
		<li class="active">
			<a href="/">Homepage</a>
		</li>
		<li>
			<a href="#">Link</a>
		</li>
	</ul>
</div>
	<h1 style="text-align:center">Thao tác với Array</h1>
	<?php

		$cursor_max = 0; $cursor_min = 0;
		
		$arr_1 = array(1,2,3,4,5,6,7,8,9,15);
		$arr_1_length = count($arr_1);
		include("goifunction.php");

		$bt_1 = giatri_chan_trong_mang($arr_1);
		foreach ($bt_1 as $value) {
			echo $value.'<br>';
		}
		echo('<br>');
		$bt_3 = giatri_max_trong_mang($arr_1);
		echo($bt_3);
		echo('<br>');
		$bt_5 = so_chan_cuoi_cung($arr_1);
		echo($bt_5);
		echo('<br>');

		if($_POST){
			$str1  = $_POST['name_bt1'];
			$str2  = $_POST['name_bt2'];
			$str3  = $_POST['name_bt3'];
			$str4  = $_POST['name_bt4'];
			$str5  = $_POST['name_bt5'];
			$str6  = $_POST['name_bt6'];
			$str7  = $_POST['name_bt7'];

			if($str2){
				$arr_2 = array(1,2,3,4,5,6,7,8,9,10);
				foreach ($arr_2 as $key2 => $value2) {
					/*if($arr_2[$value2] < 0){
						echo "<pre>";
						print_r($arr_2[$key2]);
						echo "</pre>";
					}else{
						echo "";
					}*/
					echo "<pre>";
						print_r($arr_2[$value2]);
						echo "</pre>";
				}
			}
			if($str3){
			}
			if($str4){
				
			}
			if($str5){
				
			}
			if($str6){

			}
			if($str7){
				
			}
		}
	?>

		<!-- BAI 1 -->
		<form action="" method="POST" role="form">
			<div class="01_content">
				<legend>BÀI 1</legend>
				<div class="form-group">
					<label for="">Hàm liệt kê các giá trị chẵn trong mảng 1 chiều số nguyên : </label>
					<input type="text" class="form-control" id="" name="name_bt1" placeholder=""> <?php echo ($alert1? $alert1:"") ?>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 2 -->
		<form action="" method="POST" role="form">
			<div class="02_content">
				<legend>BÀI 2</legend>
				<div class="form-group">
					<label for="">Hàm liệt kê các vị trí là giá trị âm trong mảng 1 chiều số thực : </label> <?php echo ($alert2? $alert2:"") ?>
					<input type="text" class="form-control" id="" name="name_bt2" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 3 -->
		<form action="" method="POST" role="form">
			<div class="03_content">
				<legend>BÀI 3</legend>
				<div class="form-group">
					<label for="">Hàm tìm max trong mảng 1 chiều số thực : </label> <?php echo ($alert3? $alert3:"") ?>
					<input type="text" class="form-control" id="" name="name_bt3" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 4 -->
		<form action="" method="POST" role="form">
			<div class="04_content">
				<legend>BÀI 4</legend>
				<div class="form-group">
					<label for="">Hàm tìm giá trị dương đầu tiên trong mảng 1 chiều số thực (Nếu mảng ko có giá trị dương thì trả về -1) : </label> <?php echo ($alert4? $alert4:"") ?>
					<input type="text" class="form-control" id="" name="name_bt4" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 5 -->
		<form action="" method="POST" role="form">
			<div class="05_content">
				<legend>BÀI 5</legend>
				<div class="form-group">
					<label for="">Hàm tìm số chẵn cuối cùng trong mảng 1 chiều số nguyên (Nếu mảng ko có giá trị chẵn thì trả về -1): </label> <?php echo ($alert5? $alert5:"") ?>
					<input type="text" class="form-control" id="" name="name_bt5" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 6 -->
		<form action="" method="POST" role="form">
			<div class="06_content">
				<legend>BÀI 6</legend>
				<div class="form-group">
					<label for="">Tìm 1 vị trí mà tại đó có giá trị nhỏ nhất trong mảng 1 chiều số thực : </label> <?php echo ($alert6? $alert6:"") ?>
					<input type="text" class="form-control" id="" name="name_bt6" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<!-- BAI 7 -->
		<form action="" method="POST" role="form">
			<div class="06_content">
				<legend>BÀI 7</legend>
				<div class="form-group">
					<label for="">Tìm vị trí của giá trị chẵn đầu tiên trong mảng 1 chiều số nguyên (Nếu mảng không có GT chẵn thì trả về -1): </label> <?php echo ($alert6? $alert6:"") ?>
					<input type="text" class="form-control" id="" name="name_bt7" placeholder="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
</div>

	</body>
</html>



