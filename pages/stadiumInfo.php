<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stadium Information</title>
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
	<?php 
		include_once('layout/booking-info.php');
	?>
	
	<!-- content -->
		<section id="booking-info-content">
			<div class="content-left">
				<a href="index.php?c=booking&a=info&id=<?=$_GET['id'];?>">
					<button>Getting there</button>
				</a>
				<a href="index.php?c=booking&a=stadiumInfo&id=<?=$_GET['id'];?>">
					<button>Stadium information</button>
				</a>
			</div>
			<div class="stadium-content-right">
				<h3>Sân bóng đá <?=$pitch->getName();?></h3>
				<?=$pitch->getDescription();?>
				<br>
				<img src="imgs/<?=$pitch->getPitchImage();?>" alt="">
				<br>
				<br>
				<h3>Tiện ích tại sân bóng <?=$pitch->getName();?></h3>
				<ul>
					<?=$pitch->getFeatures()?>
				</ul>
				<br>
				<h3>Giá thuê sân bóng <?=$pitch->getName();?></h3>
				<p>Tùy thuộc vào từng khung giờ khác nhau mà giá thuê sân bóng Tao Đàn dao động từ <?=number_format($pitch->getPrice() - 100000);?> - <?=number_format($pitch->getPrice() + 300000);?>đ. Trung bình sân sẽ có giá <?=number_format($pitch->getPrice());?>đ.</p>
				<br>
				<h3>Một số hình ảnh khác tại sân bóng <?=$pitch->getName();?> </h3>
				<div class="related-image">
					<!-- <img src="imgs/stadium-info-2.jpg" alt="">
					<img src="imgs/stadium-info-3.jpg" alt="">
					<img src="imgs/stadium-info-4.jpg" alt=""> -->
					<?=$pitch->getRelatedImage();?>
				</div>
				<br>
				<?php 
                    session_id() || session_start();
                    if (!empty($_SESSION["firstname"])) {
                ?>
				<a href="index.php?c=booking&a=form&id=<?=$_GET['id'];?>"><button>BOOKING NOW</button></a>
				<?php  
					} else {
				?>
				<a href="index.php?c=register"><button>REGISTER FOR BOOKING</button></a>
				<?php 
					}
				?>
			</div>
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

	<script>
		$('main #booking-title-wrapper .infor-booking-button a:nth-child(1) span').css('background-image', 'linear-gradient(to bottom, #f0932b, #ffbe76, #f6e58d, #ecf0f1, #fff');
		$('main #booking-info-content .content-left a:nth-child(2) button').css({
			'background-color': '#4b7bec',
			'color': 'white'
		});
	</script>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>