<!DOCTYPE html>
<html lang="vi">
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
	<span></span>
		<div></div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
			$(document).ready(function() {
					$.post('do_motion.php', {action: 'moveleft'}, function(data, textStatus, xhr) {
						$("div").html(data);
					});
			});
			$(document).keyup(function(event){					
				if(event.which==37){
					$.post('do_motion.php', {action: 'moveleft'}, function(data, textStatus, xhr) {
						$("div").html(data);
					});
					event.preventDefault();
					return false;
				}
				if(event.which==38){
					$.post('do_motion.php', {action: 'moveup'}, function(data, textStatus, xhr) {
						$("div").html(data);
					});
					event.preventDefault();
					return false;
				}
				if(event.which==39){
					$.post('do_motion.php', {action: 'moveright'}, function(data, textStatus, xhr) {
						$("div").html(data);
					});
					event.preventDefault();
					return false;
				}
				if(event.which==40){
					$.post('do_motion.php', {action: 'movedown'}, function(data, textStatus, xhr) {
						$("div").html(data);
					});
					event.preventDefault();
					return false;
				}

		
			});
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>