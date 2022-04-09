<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
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
	<?php 
		include_once('layout/booking-info.php');
	?>

			<!-- Booking form -->
			<section id="booking-form">

				<div class="fake-border">
					<div class="form-left">
						<h4>Username</h4>
						<h4>Telephone Number</h4>
						<h4>Pitch Selection</h4>
						<h4>Booking Date</h4>
						<h4>Start Time</h4>
						<h4>End time</h4>
						<h4>Payment Method</h4>
						<h4>Fees (VNĐ)</h4>
					</div>
				</div>

				<div class="form-right">
					<form action="index.php?c=booking&a=create" method="POST">
						<input type="text" name="username" value="<?=$_SESSION['firstname'];?>" required>
						<input type="text" name="telephone-number" required>
						<input type="text" class="static" name="selected-pitch" value="<?=$pitch->getName();?>" readonly>
						<div class="form-booking-date">
							<h5>Month:</h5>
							<select name="month-booking" id="booking-month" required>
								<option value=""></option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<h5>Day:</h5>
							<select name="day-booking" id="booking-date" required>
								<option value=""></option>
							</select>
							<h5>Year:</h5>
							<select name="year-booking" id="" required>
								<option value="2022">2022</option>
							</select>
						</div>
						<select name="start-time" id="booking-start" required>
							<option value="0">00:00</option>
							<?=$pitch->getStartTime();?>
						</select>
						<select name="end-time" id="booking-end" required>
							<option value="0">00:00</option>
							<?=$pitch->getEndTime();?>
						</select>
						<div class="payments">
							<label>
								<input type="radio" name="payment-method" value="1" checked="checked"><span>Cash</span>
							</label>
							<label>
								<input type="radio" name="payment-method" value="2"><span>Credit Card</span>
							</label>
						</div>

						<input type="text" class="static" id="booking-price" name="price" value="<?=$pitch->getPrice();?>" readonly>

						<button type="submit" class="check">Booking</button>
					</form>
				</div>
			</section>

			<!-- button-scroll-up -->
			<?php  
				include_once("layout/go-to-top.php");
			?>
	</main>

	<!-- footer -->
	<?php 
		include_once('layout/footer.php');
	?>

	<script>
		$('main #booking-title-wrapper .infor-booking-button a:nth-child(2) span').css('background-image', 'linear-gradient(to bottom, #f0932b, #ffbe76, #f6e58d, #ecf0f1, #fff');
	</script>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>