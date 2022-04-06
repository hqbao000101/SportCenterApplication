<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ChooseRole</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style/form.css">
</head>
<body>
	<!-- header -->
	<?php  
		include_once('layout/header.php');
	?>

	<!-- main -->
	<main>
		<section class="form-heading">
			<h2 style="display: inline">Choose your role</h2>
		</section>

		<!-- Role content -->
		<section id="role-content">
			<!-- Customer -->
			<div>
				<img src="imgs/customer-icon.png" alt="">
				<a href="index.php?c=home&a=setRole&id=1">
					<button>Customer</button>
				</a>
			</div>

			<!-- Sport Center -->
			<div>
				<img src="imgs/sportCenter-icon.png" alt="">
				<a href="index.php?c=home&a=setRole&id=2">
					<button>Sport Center</button>
				</a>
			</div>
		</section>
	</main>
</body>
</html>