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
		<title>LESSON 4 : Thao tác Với Array</title>

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

<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="backtotop.css">
<script type="text/javascript" src="backtotop.js"></script>
<script type="text/javascript">
	function refreshPage(){
		location.reload(true);
	}
</script>

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
		include("goifunction.php");
		//$arr_1 = array(1,2,3,4,5,6,7,8,9,10);
		$arr_ = array();
		$arr_1 = create_rand_array_songuyen($arr_);

		$arr_1_length = count($arr_1);
	?>
	<button type="button" class="btn btn-default" onclick='refreshPage();'>Reload Random Array</button>
	<div class="well">
		<?
		//echo('<pre>');
		print_r($arr_1);
		//echo('</pre>');
		?>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Giá trị chẵn trong mảng //132</h3>
			<?php
			$bt_1 = giatri_chan_trong_mang($arr_1);
			foreach ($bt_1 as $value) {
				echo $value.'<br>';
			}
			?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Các vị trí có giá trị âm trong mảng //133</h3>
			<?php
			$bt_2 = cacvitri_co_GT_am_trong_mang($arr_1);
			echo($bt_2. '<br>');
			foreach ($bt_2 as $value) {
				echo $value.'<br>';
			}
			?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Giá trị max trong mảng //134</h3>
			<?
			$bt_3 = giatri_max_trong_mang($arr_1);
			echo($bt_3);
			?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Giá trị dương đầu tiên trong mảng (Nếu mảng ko có giá trị dương thì trả về -1) //135</h3>
			<? $bt4 = giatri_duong_dautien_trong_mang($arr_1); echo($bt4); ?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Số chẵn cuối cùng //136</h3>
			<? $bt_5 = so_chan_cuoi_cung($arr_1); echo($bt_5);?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Vị trí có giá trị nhỏ nhất //137</h3>
			<? $bt6 = vitri_co_giatri_nhonhat($arr_1); echo($bt6); ?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Vị trí có giá trị chẵn đầu tiên (Nếu không có giá trị chẵn thì trả về -1) //138</h3>
			<? $bt7 = vitri_co_giatri_chan_dautien($arr_1); echo($bt7); ?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Số nguyên tố đầu tiên trong mảng (Nếu không có thì trả về -1) //144</h3>
		<?
		$bt_8 = so_nguyento_dautien($arr_1); echo($bt_8);
		foreach ($bt_8 as $value) {
			echo $value.'<br>';
		}
		?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Số nguyên tố cuối cùng trong mảng (Nếu không có thì trả về -1) //148</h3>
		<?
		$bt_9 = so_nguyento_cuoicung($arr_1); echo($bt_9);
		foreach ($bt_9 as $value) {
			echo $value.'<br>';
		}
		?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Số nguyên tố lớn nhất trong mảng (Nếu mảng ko có số nguyên tố thì trả về 0) //151</h3>
			<? $bt_10 = so_nguyento_max($arr_1); echo($bt_10);?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Giá trị chẵn nhỏ nhất trong mảng (Nếu không có GT chẵn thì trả về -1) //153</h3>
			<?
			$bt_11 = GT_Chan_min($arr_1); echo($bt_11);
			foreach ($bt_11 as $value) {
				echo $value.'<br>';
			}
			?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Vị trí có giá trị âm lớn nhất (Nếu không có GT thì trả về -1) //154</h3>
			<? $bt_12 = vitri_GT_am_max($arr_1); echo($bt_12); ?>
		</div>
	</div>

	<?php
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
		}
	?>

		
<hr>
</div>

<a href="#" class="top">BACK TO TOP</a>

	</body>
</html>



