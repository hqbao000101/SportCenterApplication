<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
		include_once("layout/header.php");
	?>

	<!-- main -->
	<main>
		<section class="form-heading">
			<h2 style="display: inline">Your Account</h2>
		</section>

		<section id="signin-form">
			<!-- form for logging in user account -->
			<div class="login form-left">
				<h3>Sign In</h3>
				<form action="index.php?c=auth&a=login" method="POST">

					<h5>Email Address</h5>
					<input type="email" placeholder="Email Address" name="user-email">

					<h5>Password</h5>
					<div id="eye-toggle">
						<input type="password" placeholder="Password" name="user-password">
						<button class="PassShow">Show</button>
						<?php  
							if (empty($_SESSION['error'])){
								$_SESSION['error'] = "";
							}
						?>
						<span class="error-message"><?=$_SESSION['error']?></span>
					</div>

					<div id="submit-area">
						<span>Forgot login details?</span>
						<button type="submit">Sign in</button>
					</div>

					<div class="login-with">
						<hr>
						<span>Or login with</span>
						<hr>
					</div>

					<div class="other-logins">
						<div class="grid-item" style="background-color: #2B5E9D">
							<i class="fab fa-facebook-f"></i>
							<span>Facebook</span>
						</div>
						<div class="grid-item" style="background-color: #4099FF">
							<i class="fab fa-twitter"></i>
							<span>Twitter</span>
						</div>
						<div class="grid-item" style="background-color: #D94C4C">
							<i class="fab fa-google-plus-g"></i>
							<span>Google</span>
						</div>
						<div class="grid-item" style="background-color: #000000">
							<i class="fab fa-apple"></i>
							<span>Apple</span>
						</div>
					</div>

				</form>
			</div>

			<!-- register place if users don't have account -->
			<div class="login form-right">
				<h3>Register</h3>
				<div>
					<h3>You don't have any account?</h3>
					<p>In that case, you are missing out on:</p>
					<a href="register.php"><button>Register</button></a>
				</div>
			</div>
		</section>
	</main>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>