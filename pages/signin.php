<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SManage-Signin</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<!-- header -->
	<header>
		<img src="../imgs/sport-icon.png" alt="Not available now">
		<div class="menu-wrapper">
			<div class="header-left">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="">Booking</a></li>
					<li><a href="">Team</a>
						<div class="sub-menu-team">
							<ul>
								<li><a href="">Create a team</a></li>
								<li><a href="">Team information</a></li>
							</ul>
						</div>
					</li>
					<li><a href="">Membership</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
			<div class="header-right">
				<ul>
					<li><a href="">Sign in</a></li>
					<li><a href="">Register</a></li>
				</ul>
			</div>
		</div>
	</header>

	<!-- main -->
	<main>
		<section id="signin-banner">
			<h2 style="display: inline">Your Account</h2>
		</section>

		<section id="signin-form">
			<!-- form for logging in user account -->
			<div class="login form-left">
				<h3>Sign In</h3>
				<form action="home.php" method="POST">

					<h5>Email Address</h5>
					<input type="email" placeholder="Email Address" name="user-email">

					<h5>Password</h5>
					<div id="eye-toggle">
						<input type="password" placeholder="Password" name="user-password">
						<button>Show</button>
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
					<button><a href="register.php">Register</a></button>
				</div>
			</div>
		</section>
	</main>

	<!-- footer -->
</body>
</html>