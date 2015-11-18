<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title>Lesson 7 : Matrix</title>
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
	<script type="text/javascript">
		function refreshPage(){
			location.reload(true);
		}
	</script>

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
				<li><a href="/Lesson6">Lesson 6</a></li>
				<li class="active"><a href="/Lesson7">Lesson 7</a></li>
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
	<h1 style="text-align:center">Thao tác với Ma Trận - BT 7</h1>

	<div class="well"> <!-- Ma tran so nguyen -->
		<h4>Ma trận tam giác cân (Phần 1)</h4>
		<form action="" method="post">
			Nhập chiều cao : <input type="text" name="txt_cao">
			<button type="submit" name="btnsubmit" value="submit_1">Xuất ma trận nửa hình tam giác (Tối đa 10)</button>&nbsp;&nbsp;
			<button type="submit" name="btnsubmit" value="submit_2">Xuất ma trận tam giác cân (Tối đa 10)</button>
		</form>
		<?
		if(isset($_POST["btnsubmit"]) && ($_POST["txt_cao"] <= 10)){
			$cao = $i = $_POST["txt_cao"];
			if($_POST["btnsubmit"] == "submit_1"){
		while($i--) {
		?>
		<table class="table table-hover">
			<tbody>
				<tr>
					<td style="width:60px">
						<?
							echo(str_repeat('♂ Happy ★ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $cao - $i). "\n");
							//echo(str_repeat('♂ Happy ★ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $i - $cao). "\n");
						?>
						</td>
				</tr>
			</tbody>
		</table>
		<? } }
		if($_POST["btnsubmit"] == "submit_2"){
			for ($x=1; $x <= $cao; $x++) {
				for ($j=0; $j < $cao-$x; $j++) {
					echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}
				for ($j=0; $j < $x; $j++) {
					echo("Happy ★ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \n");
				}
				echo "\n";
			}
		}
		else{
		?>
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Yêu cầu xuất ma trận : </strong> Chiều cao ma trận trong khoảng (Max : 15)
			</div>
		<? } } ?>

	</div>




	<div class="well"> <!-- Ma tran  -->
	<h4>Xoay ma trận (Phần 2) <button type="button" onclick="refreshPage()" class="btn btn-default">Reload Random Matrix</button>
	<button type="button" class="btn btn-default" onclick="bubblesort();">Rotate Left Matrix</button>
	<button type="button" class="btn btn-default" onclick="">Rotate Right Matrix</button>
	</h4>
		<?
		$array = create_rand_matrix_array_songuyento();
		for($i=0; $i< 5; $i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
			<? for ($j=0; $j < 5; $j++) {
				?>
					<td style="width:60px">
						<? 	if(testsonguyento_2($array[$j][$i])) {
								echo('<b style="color:red">' .$array[$j][$i]. '</b>');
							}else{
								echo($array[$j][$i]);
							}
						?>
					</td>
				<? } ?>
				</tr>
			</tbody>
		</table>
			<? } ?>
	</div>

	<div class="well">
		<?
		$array = create_rand_matrix_array_songuyento();
		for($i=0; $i< 5; $i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
					<? for ($j=0; $j < 5; $j++) {
						?>
						<td style="width:60px">
							<? 	if(testsonguyento_2($array[$j][$i])) {
								echo('<b style="color:red">' .$array[$j][$i]. '</b>');
							}else{
								echo($array[$j][$i]);
							}
							?>
						</td>
						<? } ?>
					</tr>
				</tbody>
			</table>
			<? } ?>
	</div>

	<div class="well">
		<?
		$array = create_rand_matrix_array_songuyento();
		for($i=0; $i< 5; $i++){ ?>
		<table class="table table-hover">
			<tbody>
				<tr>
					<? for ($j=0; $j < 5; $j++) {
						?>
						<td style="width:60px">
							<? 	if(testsonguyento_2($array[$j][$i])) {
								echo('<b style="color:red">' .$array[$j][$i]. '</b>');
							}else{
								echo($array[$j][$i]);
							}
							?>
						</td>
						<? } ?>
					</tr>
				</tbody>
			</table>
			<? } ?>
	</div>

</div>

</body>
</html>