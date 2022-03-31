<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
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
			<h2 style="display: inline">Create Your Account</h2>
		</section>

		<section id="register-form">
			<form action="role.php" method="POST">
				<h3>Your Personal Detail</h3>
				<div class="content-wrapper">
					<!-- First Name -->
					<div>
						<h4>First Name</h4>
						<span>*Required</span>
					</div>
					<div>
						<input type="text" placeholder="First Name" name="FirstName" required>
					</div>

					<!-- Last Name -->
					<div>
						<h4>Last Name</h4>
						<span>*Required</span>
					</div>
					<div>
						<input type="text" placeholder="Last Name" name="LastName" required>
					</div>

					<!-- Email -->
					<div>
						<h4>Email Address</h4>
						<span>*Required</span>
					</div>
					<div>
						<input type="text" placeholder="Email Address" name="Email" required>
						<h5>* We will send you a confirmation email to this address</h5>
					</div>

					<!-- Password -->
					<div>
						<h4>Password</h4>
						<span>*Required</span>
					</div>
					<div>
						<div id="eye-toggle">
							<input type="password" placeholder="Password" name="Password" required>
							<button class="PassShow">Show</button>
						</div>
						<h5>* At least 8 characters</h5>
					</div>

					<!-- Gender -->
					<div>
						<h4>Gender</h4>
						<span>*Required</span>
					</div>
					<div>
						<label><input type="radio" name="Gender" value="Male" checked> Male </label>
						<label><input type="radio" name="Gender" value="Female"> Female </label>
						<label><input type="radio" name="Gender" value="Other"> Unspecified </label>
					</div>

					<!-- Date 0f Birth -->
					<div>
						<h4>Date of Birth</h4>
						<span>*Required</span>
					</div>
					<div>
						<!-- Day -->
						<select name="Day" id="">
							<option value="0">Day</option>
							<?php 
								for ($i = 1; $i <= 31; $i ++) {
							?>
							<option value="<?=$i; ?>"><?=$i; ?></option>
							<?php
								}
							?>
						</select>
						<!-- Month -->
						<select name="Month" id="">
							<option value="0">Month</option>
							<?php 
								for ($i = 1; $i <= 12; $i ++) {
							?>
							<option value="<?=$i; ?>"><?=$i; ?></option>
							<?php
								}
							?>
						</select>
						<!-- Year -->
						<select name="Year" id="">
							<option value="0000">Year</option>
							<?php 
								for ($i = 1990; $i <= 2020; $i ++) {
							?>
							<option value="<?=$i; ?>"><?=$i; ?></option>
							<?php
								}
							?>
						</select>
					</div>

					<!-- Country -->
					<div>
						<h4>Country/Region of Residence</h4>
						<span>*Required</span>
					</div>
					<div>
						<select name="Country" id="">
							<option value="None">Select a country</option>
							<option value="VN">VN</option>
							<option value="America">America</option>
							<option value="England">England</option>
							<option value="Singapore">Singapore</option>
							<option value="Japan">Japan</option>
							<option value="Korean">Korean</option>
							<option value="France">France</option>
							<option value="ThaiLand">ThaiLand</option>
						</select>
					</div>
				</div>
				<button type="submit" id="register-form-submit">Register</button>
			</form>
		</section>
		
		<!-- button-scroll-up -->
		<?php  
			include_once("../layout/go-to-top.php");
		?>
	</main>

	<script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>