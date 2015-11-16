<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title>Lesson 6 : Matrix</title>
</head>
<body>
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/Lesson4/backtotop.css">
	<script type="text/javascript" src="/Lesson4/backtotop.js"></script>

	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Happy - Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/Lesson1">Lesson 1</a></li>
				<li><a href="/Lesson1b">Lesson 1B</a></li>
				<li><a href="/Lesson2">Lesson 2</a></li>
				<li><a href="/Lesson3">Lesson 3</a></li>
				<li><a href="/Lesson4">Lesson 4</a></li>
				<li><a href="/Lesson5">Lesson 5</a></li>
				<li class="active"><a href="/Lesson6">Lesson 6</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div><!-- /.navbar-collapse -->
	</nav>

<div class="container">
	<? include("../library/goifunction.php"); ?>
	<h1 style="text-align:center">Thao tác với Ma Trận - BT 6</h1>

	<div class="well"> <!-- Ma tran so nguyen -->
		<h4>Ma trận số nguyên (Phần 1)</h4>
		<form action="" method="post">
			Chiều dài : <input type="text" name="txt_dai">
			Chiều rộng : <input type="text" name="txt_rong">
			<button type="submit" name="btnsubmit">Xuất ma trận</button>
		</form>
		<?
		if(isset($_POST["btnsubmit"])){
			$dai = $_POST["txt_dai"]; $rong = $_POST["txt_rong"];
		for($i=0;$i< $rong; $i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
			<? for ($j=0; $j < $dai; $j++) {
				$array = create_rand_matrix_array_songuyen($rong, $dai);
				?>
					<td style="width:60px"><? echo($array[$i][$j]); ?></td>
				<? } ?>
				</tr>
			</tbody>
		</table>
			<? } } ?>
	</div>

	<div class="well"> <!-- Ma tran so nguyen to -->
	<h4>Ma trận số nguyên tố (Phần 2)</h4>
		<?
		for($i=0;$i<10;$i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
			<? for ($j=0; $j < 10; $j++) {
				$array = create_rand_matrix_array_songuyento();
				?>
					<td style="width:60px"><? echo($array[$i][$j]); ?></td>
				<? } ?>
				</tr>
			</tbody>
		</table>
			<? } ?>
	</div>

	<div class="well"> <!-- Ma tran so thap phan -->
	<h4>Ma trận số thập phân (Phần 3, 4)</h4>
		<?
		for($i=0;$i<10;$i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
			<? for ($j=0; $j < 10; $j++) {
				$array = create_rand_matrix_array_sothuc();
				$array_total += $array[$i][$j];
				?>
					<td style="width:60px"><? echo($array[$i][$j]); ?></td>
				<? } ?>
				</tr>
			</tbody>
		</table>
			<? } echo('=> Tổng giá trị các phần tử trong ma trận này : ' .$array_total); ?>
	</div>

	<div class="well"> <!-- Sap xep Ma tran so thap phan -->
	<h4>Sắp xếp ma trận số thập phân (Phần 5)</h4>
		<?
		for($i=0; $i<5; $i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
			<? for ($j=0; $j < 5; $j++) {
				//$array = create_rand_sort_matrix_array_sothuc();
				$array = bubblesort();

				?>
					<td style="width:60px"><? echo($array[$i][$j]); ?></td>
				<? } ?>
				</tr>
			</tbody>
		</table>
			<? } ?>
	</div>

</div>

</body>
</html>