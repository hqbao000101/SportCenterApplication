<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stadium Information</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../style/form.css">
</head>
<body>
	<!-- header -->
	<?php  
		include_once('../layout/header.php');
	?>

	<!-- main -->
	<main>
		<section class="form-heading">
			<h2 style="display: inline">Team Information</h2>
		</section>

		<!-- title -->
		<section id="booking-title-wrapper">
			<div class="pitch-title">
				<img src="../imgs/team-info-icon.png" alt="">
				<div>
					<h3>Rampage FC</h3>
					<h4>CONTACT US</h4>
					<div class="share-media">
						<i class="fas fa-share-alt"></i>
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-youtube"></i>
						<i class="fab fa-instagram-square"></i>
					</div>
				</div>
			</div>

			<div class="triangle-shape">
			</div>

			<img src="../imgs/team-info-banner.jpg" alt="">

			<div class="infor-booking-button">
				<a href=""><span>Overview</span></a>
				<a href=""><span>Member</span></a>
			</div>
		</section>
	
		<!-- Overview -->


		<!-- button-scroll-up -->
		<?php  
			include_once("../layout/go-to-top.php");
		?>
	</main>

	<!-- footer -->
	<?php 
		include_once('../layout/footer.php');
	?>

	<script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>