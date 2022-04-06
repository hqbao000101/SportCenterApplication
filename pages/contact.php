<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
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
			<h2 style="display: inline">Contact us</h2>
		</section>

		<section id="contact-content">
			<form action="index.php" method="POST">
				<!-- User name -->
				<div class="contact-items contact-item-1">
					<h3>Name</h3>
				</div>
				<div class="contact-items contact-item-2">
					<input type="text" name="user-name" placeholder="Yourname...">
				</div>

				<!-- User phone -->
				<div class="contact-items contact-item-3">
					<h3>Phone number</h3>
				</div>
				<div class="contact-items contact-item-4">
					<input type="tel" name="PhoneNumber" placeholder="How to contact you?">
				</div>

				<!-- contact title -->
				<div class="contact-items contact-item-5">
					<h3>Title</h3>
				</div>
				<div class="contact-items contact-item-6">
					<input type="text" name="Title" placeholder="What is this about?">
				</div>
				<div class="contact-items contact-item-7">
					<h3>Content</h3>
				</div>
				<div class="contact-items contact-item-8">
					<textarea name="Content" id="" cols="30" rows="10" placeholder="Write something..."></textarea>
					<button type="submit" class="check">Send</button>
				</div>
			</form>
		</section>
	</main>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>