<main>
		<section class="form-heading">
			<h2 style="display: inline">Booking</h2>
		</section>

		<!-- title -->
		<section id="booking-title-wrapper">
			<div class="pitch-title">
				<img src="imgs/football-logo.png" alt="">
				<div>
					<h3><?=$pitch->getName();?> Football Field</h3>
					<h4>CONTACT US</h4>
					<div class="share-media">
						<i class="fas fa-share-alt"></i>
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-youtube"></i>
						<i class="fab fa-instagram-square"></i>
					</div>
				</div>
			</div>

			<div class="triangle-shape">
			</div>

			<img src="imgs/TaoDan.jpg" alt="">

			<div class="infor-booking-button">
				<a href="index.php?c=booking&a=info&id=<?=$_GET['id'];?>"><span>Information</span></a>
				<?php 
                    session_id() || session_start();
                    if (!empty($_SESSION["firstname"])) {
                ?>
				<a href="index.php?c=booking&a=form&id=<?=$_GET['id'];?>"><span>Booking</span></a>
				<?php 
					} 
				?>
			</div>
		</section>