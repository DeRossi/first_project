<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<div class="container">
	<h2>Object Oriented Programming</h2>

	<? include 'class.php';
	?>

	<? 
	$hocsinh = new Students();
	$hocsinh->setStudent('Hạnh Phúc', 24, '100/25 Đất Thánh', '01692253388', '1m66', '55 kg');
	$hocsinh->getStudent();
	?>
</div>