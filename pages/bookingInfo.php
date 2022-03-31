<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Map</title>
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
	<?php 
		include_once('../layout/booking-info.php');
	?>
	
	<!-- content -->
		<section id="booking-info-content">
			<div class="content-left">
				<a href="bookingInfo.php">
					<button>Getting there</button>
				</a>
				<a href="stadiumInfo.php">
					<button>Stadium information</button>
				</a>
			</div>
			<div class="content-right">
				<h3>MAP</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4708955931806!2d106.69250791444985!3d10.775200462163566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f397073534b%3A0x677583c74b18228c!2zU8OibiBiw7NuZyBUYW8gxJDDoG4sIEh1eeG7gW4gVHLDom4gQ8O0bmcgQ2jDumEsIFBoxrDhu51uZyBC4bq_biBUaMOgbmgsIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1648381725804!5m2!1svi!2s" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<br>
				<h4>Location: </h4>
				<p>Số 1 Huyền Trân Công Chúa, Bến Thành, Quận 1, thành phố Hồ Chí Minh</p>
			</div>
		</section>

		<!-- button-scroll-up -->
		<?php  
			include_once("../layout/go-to-top.php");
		?>
	</main>

	<!-- footer -->
	<?php 
		include_once('../layout/footer.php');
	?>

	<script>
		$('main #booking-title-wrapper .infor-booking-button a:nth-child(1) span').css('background-image', 'linear-gradient(to bottom, #f0932b, #ffbe76, #f6e58d, #ecf0f1, #fff');
		$('main #booking-info-content .content-left a:nth-child(1) button').css({
			'background-color': '#4b7bec',
			'color': 'white'
		});
	</script>

	<script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>