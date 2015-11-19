<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		if(false){
			$('.01_content').hide(); $('.02_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide();
			$('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			$('.01').hover(function(e) {
				e.preventDefault();
				$('.01_content').show('slow', function() {});
				$('.02_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.02').hover(function() {
				$('.02_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.03').hover(function() {
				$('.03_content').show('slow', function() {});
				$('.01_content').hide(); $('.02_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.04').hover(function() {
				$('.04_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.02_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.05').hover(function() {
				$('.05_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.02_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.06').hover(function() {
				$('.06_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.02_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.07').hover(function() {
				$('.07_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.02_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.08').hover(function() {
				$('.08_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.02_content').hide(); $('.09_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.09').hover(function() {
				$('.09_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.02_content').hide(); $('.10_content').hide();
			}, function() {});
			$('.10').hover(function() {
				$('.10_content').show('slow', function() {});
				$('.01_content').hide(); $('.03_content').hide(); $('.04_content').hide(); $('.05_content').hide(); $('.06_content').hide(); $('.07_content').hide(); $('.08_content').hide(); $('.09_content').hide(); $('.02_content').hide();
			}, function() {});
		}
	});
</script>
<head>
	<title>Regular Expression Basic</title>
</head>
<body>
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

	<h1 style="text-align:center">Regular Expression căn bản</h1>
	<!-- <h4 style="text-align:center">Mần bài nào rê chuột tới bài đó :"D</h4> -->
	<table class="table table-hover hide">
		<thead>
			<tr>
				<th class="01">Bài 01</th>
				<th class="02">Bài 02</th>
				<th class="03">Bài 03</th>
				<th class="04">Bài 04</th>
				<th class="05">Bài 05</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="01">Kiểm tra định dạng thẻ cào điện thoại</td>
				<td class="02">Kiểm tra định dạng ngày tháng năm</td>
				<td class="03">Kiểm tra tên đăng nhập</td>
				<td class="04">Kiểm tra định dạng mật khẩu</td>
				<td class="05">Kiểm tra định dạng của email</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-hover hide">
		<thead>
			<tr>
				<th class="06">Bài 06</th>
				<th class="07">Bài 07</th>
				<th class="08">Bài 08</th>
				<th class="09">Bài 09</th>
				<th class="10">Bài 10</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="06">Kiểm tra định dạng URL</td>
				<td class="07">Lấy tất cả email trong chuỗi cho trước</td>
				<td class="08">Lấy 1 đoạn ngắn trong URL</td>
				<td class="09">Lấy danh sách các LINK trong http://freetuts.net</td>
				<td class="10">Lấy danh sách các URL hình ảnh trong http://freetuts.net/codeigniter</td>
			</tr>
		</tbody>
	</table>
	<?php
	// Bài 01: Kiểm tra định dạng của thẻ cào điện thoại.
	//Hãy viết chuỗi Regex kiểm tra định dạng của thẻ cào điện thoại với cấu trúc như sau: xxxx-xxxx-xxxx-xxxx, trong đó x là các số từ [0-9]
	?>
	<?php
		if($_POST){
			$str1  = $_POST['name_bt1'];
			$str2  = $_POST['name_bt2'];
			$str3  = $_POST['name_bt3'];
			$str4  = $_POST['name_bt4'];
			$str5  = $_POST['name_bt5'];
			$str6  = $_POST['name_bt6'];
			$str7  = $_POST['name_bt7'];
			$str8  = $_POST['name_bt8'];
			$str9  = $_POST['name_bt9'];
			$str10 = $_POST['name_bt10'];

			$pattern1 = "#^\(?[\d]{4}\)?-\(?[\d]{4}\)?-\(?[\d]{4}\)?-[\d]{4}$#"; // OR : "/^([0-9]{1,5}-[0-9]{1,5}-[0-9]{1,5}-[0-9]{1,5})$/"
			if($str1){
				if(preg_match($pattern1, $str1) === 1){
					$alert1 = '<span style="color:green"><b>Bạn vừa nhập vào mã thẻ cào hợp lệ [' .$str1. ']</b></span>';
				}else{
					$alert1 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập vào mã thẻ cào không hợp lệ</b></span>';
				}
			}
			if ($str2) {
				$pattern2 = "#^(([012][0-9])||([3][01]))[/](([0][0-9])||[1][0-2])[/](19||20)[0-9][0-9]$#"; // OR : ""
				if(preg_match($pattern2, $str2) === 1){
					$alert2 = '<span style="color:green"><b>Bạn vừa nhập vào định dạng ngày tháng hợp lệ [' .$str2. ']</b></span>';
				}else{
					$alert2 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập vào định dạng ngày tháng không hợp lệ</b></span>';
				}
			}
			if ($str3) {
				$pattern3 = "#^((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,12})$#"; // OR : ""
				if(preg_match($pattern3, $str3) === 1){
					$alert3 = '<span style="color:green"><b>Bạn vừa nhập vào username hợp lệ [' .$str3. ']</b></span>';
				}else{
					$alert3 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập vào username không hợp lệ</b></span>';
				}
			}
			if ($str4) {
				$pattern4 = "#^((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})$#"; // OR : "#/^([A-z0-9])([\w_\.!@#$%^&*()]+){8,8}$/#"
				if(preg_match($pattern4, $str4) === 1){
					$alert4 = '<span style="color:green"><b>Bạn đã nhập đúng mật khẩu [' .$str4. ']</b></span>';
				}else{
					$alert4 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập mật khẩu không hợp lệ</b></span>';
				}
			}
			if ($str5) {
				$pattern5 = "#^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$#"; // OR : ""
				if(preg_match($pattern5, $str5) === 1){
					$alert5 = '<span style="color:green"><b>Bạn vừa nhập vào email hợp lệ [' .$str5. ']</b></span>';
				}else{
					$alert5 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập vào email không hợp lệ</b></span>';
				}
			}
			if ($str6) {
				$pattern6 = "#^(http|https|ftp):\\/\\/(www\\.)?[\\w\\-]+\\.[\\w]+(\\.[\\w]+)*\\/?(([\\w\\-]+)\\/?)*([\\w\\-_]+\.(php|html|htm|jsp|aspx))?(\\?([\\w\\-]+=[\\w\\-]+)*(&([\\w\\-]+=[\\w\\-]+))*)?$#"; // OR : ""
				if(preg_match($pattern6, $str6) === 1){
					$alert6 = '<span style="color:green"><b>Bạn vừa nhập vào chuỗi URL hợp lệ [' .$str6. ']</b></span>';
				}else{
					$alert6 = '<span style="color:red"><b>Bạn chưa nhập hoặc vừa nhập vào chuỗi URL không hợp lệ</b></span>';
				}
			}
		}
	?>
<hr>
		<!-- BAI 1 -->
		<form action="" method="POST" role="form">
			<div class="01_content">
				<legend>BÀI 1</legend>
				<div class="form-group">
					<label for="">Nhập số thẻ cào điện thoại hợp lệ : </label> <?php echo ($alert1? $alert1:"") ?>
					<input type="text" class="form-control" id="" name="name_bt1" placeholder="xxxx-xxxx-xxxx-xxxx">
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
					<label for="">Nhập ngày tháng năm theo format : </label> <?php echo ($alert2? $alert2:"") ?>
					<input type="text" class="form-control" id="" name="name_bt2" placeholder="Format : dd/mm/yyyy (Ngày thì 1 -> 31)">
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
					<label for="">Nhập username theo format : </label> <?php echo ($alert3? $alert3:"") ?>
					<input type="text" class="form-control" id="" name="name_bt3" placeholder="Từ 4 -> 12 kí tự. Phải là chữ số từ 0-9, chữ cái thường, chữ hoa và dấu gạch dưới (_)">
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
					<label for="">Kiểm tra định dạng mật khẩu : </label> <?php echo ($alert4? $alert4:"") ?>
					<input type="text" class="form-control" id="" name="name_bt4" placeholder="Phải có ít nhất 8 kí tự. Phải có chữ hoa, chữ thường, số và 1 kí tự đặc biệt">
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
					<label for="">Kiểm tra định dạng email : </label> <?php echo ($alert5? $alert5:"") ?>
					<input type="text" class="form-control" id="" name="name_bt5" placeholder="Check format email">
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
					<label for="">Kiểm tra định dạng chuỗi URL : </label> <?php echo ($alert6? $alert6:"") ?>
					<input type="text" class="form-control" id="" name="name_bt6" placeholder="Check format URL">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<hr>
		<!-- BAI 7 -->
		<form action="" method="POST" role="form">
		<div class="07_content">
			<legend>BÀI 7 : Lấy tất cả email trong một chuỗi cho trước freetuts.txt</legend>
			<div class="form-group">
			<?php
				$get_email = file_get_contents("freetuts.txt");

				$str = preg_replace('|[^@]+\s|','',$get_email);
				echo($str);
			?>
			</div>
		</div>
		</form>
<hr>
		<!-- BAI 8 -->
		<form action="" method="POST" role="form">
			<div class="08_content">
			<legend>BÀI 8 : Lấy một đoạn ngắn trong URL</legend>
			<?php
				$url = 'http://freetuts.net/tong-quan-ve-route-trong-laravel-290.html';
				$pattern8 = "/(?<=net\/)(.+?)-2/"; // use greedy 
				preg_match_all($pattern8, $url, $matches8);
				echo '<pre>';
				print_r($matches8);
				echo '</pre>';
			?>

			</div>
		</form>
<hr>
		<!-- BAI 9 -->
		<form action="" method="POST" role="form">
			<div class="09_content">
			<legend>BÀI 9 : Lấy danh sách các LINK của trang http://freetuts.net/</legend>
			<?php
				$get_link = file_get_contents("freetuts.txt");

				preg_match_all('/<a href="(.*?)">(.*?)<\/a>/i', $get_link, $matches9);
				echo '<pre>';
				print_r($matches9[0]);
				echo '</pre>';
			?>
			</div>
		</form>
<hr>
		<!-- BAI 10 -->
		<form action="" method="POST" role="form">
			<div class="10_content">
			<legend>BÀI 10 : Lấy danh sách các URL hình ảnh của trang http://freetuts.net/codeigniter</legend>
			<?php
				$get_img = file_get_contents("freetuts.net_codeigniter.txt");

				preg_match_all('/<img.+src=\"([^\"]+)\"[^\/>]+[\/]?>/i', $get_img, $matches10);
				echo '<pre>';
				print_r($matches10[0]);
				echo '</pre>';
			?>
			</div>
		</form>

</div>

</body>
</html>
