<?php  
	class BookingController {
		function list() {
			include_once ABSPATH . "pages/booking.php";
		}

		function form() {
			$id = $_GET['id'];
			$pitchRepository = new PitchRepository();
			$pitch = $pitchRepository->findById($id);

			include_once ABSPATH . "pages/bookingForm.php";
		}

		function info() {
			$id = $_GET['id'];
			$pitchRepository = new PitchRepository();
			$pitch = $pitchRepository->findById($id);

			include_once ABSPATH . "pages/bookingInfo.php";
		}

		function stadiumInfo() {
			$id = $_GET['id'];
			$pitchRepository = new PitchRepository();
			$pitch = $pitchRepository->findById($id);

			include_once ABSPATH . "pages/stadiumInfo.php";
		}

		function history() {
			$bookingRepository = new BookingRepository();
			$bookings = $bookingRepository->find($_SESSION['id']);

			include_once ABSPATH . "pages/history.php";
		}

		function create() {
			$user_id = $_SESSION['id'];
			$username = $_POST['username'];
			$telephone_number = $_POST['telephone-number'];
			$selected_pitch = $_POST['selected-pitch'];
			$booking_date = $_POST['year-booking'] . '-' . $_POST['month-booking'] . '-' . $_POST['day-booking'];
			$start_time = $_POST['start-time'];
			$end_time = $_POST['end-time'];
			$price = $_POST['price'];
			$payment_method_id = $_POST['payment-method'];
			$booking_status_id = 1;

			$data = array(
				"user_id" => $user_id,
				"username" => $username,
				"telephone_number" => $telephone_number,
				"selected_pitch" => $selected_pitch,
				"booking_date" => $booking_date,
				"start_time" => $start_time,
				"end_time" => $end_time,
				"price" => $price,
				"payment_method_id" => $payment_method_id,
				"booking_status_id" => $booking_status_id
			);

			$bookingRepository = new BookingRepository();
			if ($bookingRepository->save($data)) {
				header("location: index.php?c=booking");
			} 
			else {
				echo $bookingRepository->getError();
			}
		}
	}
?>