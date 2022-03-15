<?php 
	include "../connectDB.php";

	$user_pass = md5($_POST['user-password']);
	$flag = 0; //not login yet

	for ($i=0 ; $i <= count($user_list) - 1 ; $i++) { 
		if ($user_list[$i]["email"] == $_POST['user-email'] 
			&& $user_list[$i]["password"] == $user_pass) {
			$flag = 1; // user logged in
		} 
	}

	// test case: 1) email:habo@gmail.com _ pass: 123
	// test case: 2) email:admin1@gmail.com _ pass: 123456

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SManage Sport Center</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../js/javascript.js"></script>
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
					<li><a href="signin.php">Sign in</a></li>
					<li><a href="">Register</a></li>
				</ul>
			</div>
		</div>
	</header>

	<!-- main -->
	<main>
		<section id="banner">
			<div class="grid-wrapper">
				<div class="grid-item">
					<img style="height: 350px; width: 355px" src="../imgs/banner-01.jpg" alt="error">
				</div>
				<div class="grid-item">
					<h4>News</h4>
					<h5><a href="https://www.skysports.com/">Tao Dan footbal field</a></h5>
					<p>Located right in the center of Ho Chi Minh City. With the advantage of good facilities, the pitch is still quite new and the grass is regularly maintained. There are stands with roofs for spectators. Good drainage, suitable for all weather conditions. Especially if it rains you can cancel the pitch. Thanks to that, this is a mini football field in District 1 chosen by a large number of people to exchange in their spare time.</p>
					<ul>
						<li>Cost: 400k - 700k.</li>
						<li>Scale: 6 mini courts and 2 11-person yards.</li>
					<ul>			
				</div>
				<div class="grid-item">
					<!-- banner-02 grid-item-3-->
				</div>
				<div class="grid-item">
					<h6>News</h6>
					<p><a href="https://www.skysports.com/">Bui Tan Truong: practicing at the district 7 football field</a></p>
				</div>
				<div class="grid-item">
					<!-- banner-03 grid-item-5-->
				</div>
				<div class="grid-item">
					<h6>News</h6>
					<p><a href="https://www.skysports.com/" target="_blank">Azpilicueta: Get boosted to help stop COVID spread</a></p>
				</div>
			</div>
		</section>
	</main>

	<!-- footer -->
	<footer>
		
	</footer>

	<script>
		$(document).ready(function() {
			var login_result = <?php echo json_encode($flag); ?>;

			if (login_result == 1)  {
				alert("User logged in successfully!");
				$("header .menu-wrapper .header-right").css('display', 'none');
			} else {
				window.location = "signin.php";
				alert("User failed to login. Please try again!!!");
			}
		});
	</script>

</body>
</html>