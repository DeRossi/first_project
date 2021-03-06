<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Demo 1</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="/Lesson4/backtotop.css">
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
				<li class="active"><a href="/Lesson1">Lesson 1</a></li>
				<li><a href="/Lesson1b">Lesson 1B</a></li>
				<li><a href="/Lesson2">Lesson 2</a></li>
				<li><a href="/Lesson3">Lesson 3</a></li>
				<li><a href="/Lesson4">Lesson 4</a></li>
				<li><a href="/Lesson5">Lesson 5</a></li>
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
			<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">First Action</h3>
					</div>
					<div class="panel-body">
						<form action="/first_project" method="POST" role="form" class="form_action" >
							<legend>Lesson 1</legend>
						
							<div class="form-group">
								<label for="">Text 1</label>
								<input type="text" required name="text1" class="form-control" id="" placeholder="Input field">
							</div>
						
							<div class="form-group">
								<label for="">Text 2</label>
								<input type="text" required name="text2" class="form-control" id="" placeholder="Input field">
							</div>
						
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
				  </div>
			</div>
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
			$(".form_action").submit(function(){
				$.ajax({
					url: '/first_project/Lesson1/do_ajax.php',
					type: 'POST',
					dataType: 'html',
					data: $(".form_action").serialize()
				})
				.done(function(data) {
					if(data=="done"){
						alert("file saved");
					}
					console.log("success"+data);
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				return false;
			})
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>