<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking history</title>
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
			<h2 style="display: inline">History</h2>
		</section>

		<!-- Booking list -->
		<section id="history">
			<table class="text-center">
				<tr class="table-heading">
					<th>ID</th>
					<th>Pitch</th>
					<th>Date</th>
					<th>Start</th>
					<th>End</th>
					<th>Price</th>
					<th>Payment method</th>
					<th></th>
				</tr>

				<?php 
					$i = 1;
					foreach ($bookings as $booking) {
				?>
				<tr class="table-items">
					<td>00<?=$i;?></td>
					<td><?=$booking->getSelectedPitch();?></td>
					<td><?=$booking->getBookingDate();?></td>
					<td><?=$booking->getStartTime();?></td>
					<td><?=$booking->getEndTime();?></td>
					<td><?=number_format($booking->getPrice());?>đ</td>
					<?php 
						if ($booking->getPaymentMethodId() == 1) {
					?>
					<td>Cash</td>
					<?php  
						} else {
					?>
					<td>Credit card</td>
					<?php 
						}
					?>
					<td><button>Processing</button></td>
				</tr>
				<?php  
						$i++;
					}
				?>
			</table>
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

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>