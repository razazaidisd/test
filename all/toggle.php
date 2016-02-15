<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>lollibond - Page Layout</title>
	<link type="icon/png" rel="icon" href="../favicon.ico">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/font-awesome-min.css">
	<link type="text/css" rel="stylesheet" href="../stylesheets/styles.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body class="all-components">
	<div class="max-width">
		<hr>
		<h2>Input - If Checked/Selected <small>type = radio/checkbox</small></h2>
		<div class="block-main block-padding">
			<div class="row">
				<div class="col-md-6">
					<div class="yb">
						<label><input value="yes" class="iy" type="radio" name="name"> yes</label>
						<label><input value="no" class="iy" type="radio" name="name"> no</label>
						<div class="ys display-none">
							yes selected
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="yb">
						<label><input value="yes" class="iy" type="checkbox" name="name"> yes</label>
						<div class="ys display-none">
							yes selected
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// if 'yes' is selected
		$(document).on('change', '.iy', function(){
			if ($(this).is(':checked') && $(this).val() == 'yes') {
				$(this).closest('.yb').find('.ys').slideDown();
			} else {
				$(this).closest('.yb').find('.ys').slideUp();
			}
		});
	</script>
</body>
</html>
