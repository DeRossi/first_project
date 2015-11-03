<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.form-action').submit(function(event) {
			$.ajax({
				url: '/first_project/Lesson1b/ajax.php',
				type: 'POST',
				dataType: 'html',
				data: $('.form-action').serialize()
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
		return false;
	});

</script>
<form action="/first_project" method="POST" role="form" class="form-action">
	<legend>Less 1B</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" name="txt" id="" placeholder="Input field">
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
</form>