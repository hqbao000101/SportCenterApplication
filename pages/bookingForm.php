<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
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
						<h4>Fees</h4>
					</div>
				</div>

				<div class="form-right">
					<form action="booking.php" method="POST">
						<input type="text" name="username" required>
						<input type="text" name="telephone-number" required>
						<h3>Tao Đàn Football Field</h3>
						<div class="form-booking-date">
							<h5>Month:</h5>
							<select name="month-booking" id="" required>
								<option value=""></option>
								<option value="3">March</option>
								<option value="6">June</option>
								<option value="9">September</option>
							</select>
							<h5>Day:</h5>
							<select name="day-booking" id="" required>
								<option value=""></option>
								<option value="10">10</option>
								<option value="12">12</option>
								<option value="15">15</option>
							</select>
							<h5>Year:</h5>
							<select name="year-booking" id="" required>
								<option value=""></option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
							</select>
						</div>
						<select name="start-time" id="" required>
							<option value="0">00:00</option>
							<option value="6am">06:00</option>
							<option value="8am">08:00</option>
							<option value="2pm">14:00</option>
							<option value="7pm">19:00</option>
						</select>
						<select name="end-time" id="" required>
							<option value="0">00:00</option>
							<option value="9am">09:00</option>
							<option value="11am">11:00</option>
							<option value="5pm">17:00</option>
							<option value="10pm">22:00</option>
						</select>
						<div class="payments">
							<label>
								<input type="radio" name="payment-method" checked="checked"><span>Cash</span>
							</label>
							<label>
								<input type="radio" name="payment-method"><span>Credit Card</span>
							</label>
						</div>
						
						<h5>150.000 (VNĐ)</h5>
						<button type="submit">Booking</button>
					</form>
				</div>
			</section>
	</main>

	<!-- footer -->
	<?php 
		include_once('../layout/footer.php');
	?>

	<script>
		$('main #booking-title-wrapper .infor-booking-button a:nth-child(2) span').css('background-image', 'linear-gradient(to bottom, #f0932b, #ffbe76, #f6e58d, #ecf0f1, #fff');
	</script>
</body>
</html>