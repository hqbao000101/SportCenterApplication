<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pitch List</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
	<!-- header -->
	<?php 
		include_once("layout/header.php");
	 ?>

	<!-- main -->
	<main>
		<!-- banner -->
		<?php  
			include_once("layout/banner.php");
		?>

		<!-- Booking heading -->
		<section id="booking-heading">
			<h3>Pitch List</h3>
			<div class="search-input">
				<input type="text" placeholder="Search" name="search-data">
				<div class="autocom-box">
					<!-- search elements -->
				</div>
				<a id="search-button"><i class="fas fa-search"></i></a>
			</div>
		</section>

		<!-- pitches list -->
   		<section class="booking-container">

   			<!-- list -->
       		<div class="content-product" id="product">
          		<!-- <div class="content-product-item">
              		<a href="">
                  		<img src="imgs/TaoDan.jpg" alt="">
              		</a>
              		<h3>Tao Đàn pitch</h3>
          		</div> -->
       		</div>

       		<!-- paging -->
       		<div class="content-paging">
          		<ul>
              		<i class="fas fa-angle-double-left btn-prev"></i>
              		<div class="number-page" id="number-page">
	                  	<!-- <li class="btn-warning">
	                      <a>1</a>
	                  	</li>
	                  	<li>
	                      <a>2</a>
	                  	</li>
	                  	<li>
	                      <a>3</a>
	                  	</li> -->
              		</div>
              		<i class="fas fa-angle-double-right btn-next btn-active"></i>
          		</ul>
       		</div>
   		</section>

   		<!-- button-scroll-up -->
		<?php  
			include_once("layout/go-to-top.php");
		?>
	</main>

	<!-- footer -->
	<?php  
		include_once("layout/footer.php");
	?>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>			