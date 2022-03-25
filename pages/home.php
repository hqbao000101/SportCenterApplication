<!-- <?php 
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

?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G8 SportManagement</title>
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
	<?php 
		include_once("../layout/header.php");
	 ?>

	<!-- main -->
	<main>
		<!-- banner -->
		<?php  
			include_once("../layout/banner.php");
		?>

		<!-- match-bar -->
		<?php  
			include_once("../layout/matchBar.php");
		?>

		<!-- About us - about website -->
		<section id="about-area">
			<div class="content-wrapper">
				<div id="content-menu">
					<ul>
						<li><a href="#US">ABOUT US</a></li>
						<li><a href="#WEBSITE">ABOUT WEBSITE</a></li>
					</ul>
				</div>

				<div id="US" class="content-header">
					<hr>
					<h4>Team members</h4>
					<hr>

					<div class="content-each-part part-1">	
						<img src="../imgs/ITEC.jpg" alt="">
						<div>
							<ul>
								<li>1859004 - Huỳnh Quang Bảo</li>
								<li>1859014 - Nguyễn Đình Anh Hào</li>
								<li>1859023 - Nguyễn Hữu Bảo Khôi</li>
								<li>1859045 - Giáp Trung Thành</li>
							</ul>
						</div>
					</div>			
					
				</div>
		
				<div class="content-header">
					<hr>
					<h4>Role</h4>
					<hr>

					<div id="role-body">
						<div class="container">
							<div class="card">
							    <div class="content">
								    <h2>G8</h2>
								    <h3>Quang Bảo</h3>
								    <h4 style="font-size: 25px">Programmer</h4>
								    <p>Ensure that website visitors can easily interact with the page. I do this through the combination of design, technology and programming to code a website’s appearance, as well as taking care of debugging.</p>
								    <a href="https://www.facebook.com/quang.bao.735" target="_blank">Facebook</a>
							    </div>
							</div>

							<div class="card">
							    <div class="content">
								    <h2>G8</h2>
								    <h3>Anh Hào</h3>
								    <h4 style="font-size: 25px">UI/UX Design</h4>
								    <p>Gathering user requirements, designing graphic elements and building navigation components.</p>
								    <a href="https://www.facebook.com/profile.php?id=100005966748393" target="_blank">Facebook</a>
							    </div>
							</div>

							<div class="card">
							    <div class="content">
								    <h2>G8</h2>
								    <h3>Bảo Khôi</h3>
								    <h4 style="font-size: 25px">Database Design</h4>
								    <p>Defining the detailed database design, including tables, indexes, views, constraints, triggers, stored procedures, and other database-specific constructs needed to store, retrieve, and delete persistent objects.</p>
								    <a href="https://www.facebook.com/poy.nguyen.925" target="_blank">Facebook</a>
							    </div>
							</div>
						</div>
					</div>
					
				</div>
				
				<div id="WEBSITE" class="content-header">
					<hr>
					<h4>Introduction</h4>
					<hr>

					<div class="content-each-part part-2">
						<h5>Sports Management Software is a free mobile and web application that offers a fun, fast and convenient way for players, teams, and sport centres to stay up to date with their fixtures, bookings, and competitions</h5>
						<h5>The application helps players and teams to find available time slots and appropriate opponents. Sport centres can easily manage their customers and develop a Loyalty and VIP program. Sport centres can also organise tournaments and manage fixtures and results as well as team registration through the application</h5>
						<video src="../imgs/internet-base.mp4"  controls autoplay loop muted width="800px" class="center-block"></video>
						<h5>The application runs on the internet-base therefore, the owner can easily manage and supervise the day-to-day activities of the centre remotely</h5>
						<h5>The application can be modified to suit different types of sport and different scales of centres</h5>
						<video src="../imgs/interface.mp4"  controls autoplay loop muted width="800px" class="center-block"></video>
						<h5>User-friendly interface helps easy transformation from traditional management methods to technology-based management methods</h5>
						<h5>It is also possible to expand and upgrade application functions as the centre develops</h5>
					</div>
				</div>

			</div>
		</section>
	</main>

	<!-- footer -->
	<?php 
		include_once("../layout/footer.php");
	?>
	<!-- <script>
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
	</script> -->
	<script type="text/javascript" src="../js/vanilla-tilt.js"></script>
	<script>
		VanillaTilt.init(document.querySelectorAll(".card"), {
			max: 25,
			speed: 400,
			glare: true,
			"max-glare": 1,
		});
	</script>
</body>
</html>