<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stadium Information</title>
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
	<?php 
		include_once('../layout/booking-info.php');
	?>
	
	<!-- content -->
		<section id="booking-info-content">
			<div class="content-left">
				<a href="bookingInfo.php">
					<button>Getting there</button>
				</a>
				<a href="stadiumInfo.php">
					<button>Stadium information</button>
				</a>
			</div>
			<div class="stadium-content-right">
				<h3>Sân bóng đá Tao Đàn</h3>
				<p>Tọa lạc ngay vị trí trung tâm Quận 1, sân bóng Tao Đàn được chú trọng đầu tư với chất lượng sân cỏ, hệ thống đèn chiếu sáng hiện đại đầy đủ tiện nghi mà giá cả phải chăng </p>
				<h3>Địa chỉ và giá thuê sân bóng Tao Đàn</h3>
				<p>Sân bóng Tao Đàn được xây dựng ngay cạnh công viên Tao Đàn, đối diện Dinh Độc Lập, rất dễ để mọi người tìm đường đến sân. Sân gồm 6 sân bóng 5 người rộng rãi với kích thước lòng sân rộng 20 x 40m <br> Sân bóng Tao Đàn được đầu tư sân cỏ nhân tạo hiện đại, chất lượng; cơ sở hạ tầng được đầu tư đồng bộ từ hệ thống chiếu sáng đến lưới chắn bóng đều rất tốt. Hệ thống thoát nước tốt, đảm bảo sân luôn trong trạng thái tốt trong mọi điều kiện thời tiết. Có khán đài với mái che cho khán giả <br> Sân bóng còn cung cấp dịch đào tạo bóng đá trẻ, dịch vụ trọng tài, tổ chức sự kiện,... Sân nằm ở vị trí trung tâm nên thu hút rất nhiều cầu thủ tới luyện tập và thi đấu bóng đá</p>
				<img src="../imgs/stadium-info-1.jpg" alt="">
				<h3>Tiện ích tại sân bóng Tao Đàn</h3>
				<ul>
					<li>Có khu căng tin, công trình phụ đầy đủ</li>
					<li>Chỗ gửi xe rộng rãi</li>
					<li>Có dịch vụ tìm đối, bắt đối, tìm trọng tài, tổ chức sự kiện</li>
					<li>Tổ chức các hoạt động teamwork</li>
					<li>Có trung tâm đào tạo bóng đá trẻ</li>
				</ul>
				<h3>Giá thuê sân bóng Tao Đàn</h3>
				<p>Tùy thuộc vào từng khung giờ khác nhau mà giá thuê sân bóng Tao Đàn dao động từ 150.000 - 350.000đ</p>
				<h3>Một số hình ảnh, video khác tại sân bóng Tao Đàn </h3>
				<div class="related-image">
					<img src="../imgs/stadium-info-2.jpg" alt="">
					<img src="../imgs/stadium-info-3.jpg" alt="">
					<img src="../imgs/stadium-info-4.jpg" alt="">
				</div>
				<a href="bookingForm.php"><button>BOOKING NOW</button></a>
			</div>
		</section>
	</main>

	<!-- footer -->
	<?php 
		include_once('../layout/footer.php');
	?>

	<script>
		$('main #booking-title-wrapper .infor-booking-button a:nth-child(1) span').css('background-image', 'linear-gradient(to bottom, #f0932b, #ffbe76, #f6e58d, #ecf0f1, #fff');
		$('main #booking-info-content .content-left a:nth-child(2) button').css({
			'background-color': '#4b7bec',
			'color': 'white'
		});
	</script>
</body>
</html>