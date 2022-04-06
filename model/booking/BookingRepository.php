<?php  
	class BookingRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$bookings = array();
			$sql = "SELECT * FROM booking ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$booking = new Booking($row["id"], $row["user_id"], $row["username"], $row["telephone_number"], $row["selected_pitch"], $row["booking_date"], $row["start_time"], $row["end_time"], $row["price"], $row["payment_method_id"], $row["booking_status_id"]);
					$bookings[] = $booking;
				}
			}
			return $bookings;
		}

		function getAll() {
			return $this->fetchAll();
		}

		function save($data) {
			global $conn;
			$user_id = $data["user_id"];
			$username = $data["username"];
			$telephone_number = $data["telephone_number"];
			$selected_pitch = $data["selected_pitch"];
			$booking_date = $data["booking_date"];
			$start_time = $data["start_time"];
			$end_time = $data["end_time"];
			$price = $data["price"];
			$payment_method_id = $data["payment_method_id"];
			$booking_status_id = $data["booking_status_id"];

			$sql = "INSERT INTO booking (user_id, username, telephone_number, selected_pitch, booking_date, start_time, end_time, price, payment_method_id, booking_status_id) VALUES ('$user_id', '$username', '$telephone_number', '$selected_pitch', '$booking_date', '$start_time', '$end_time', '$price', '$payment_method_id', '$booking_status_id')";

			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				return $last_id;
			}

			$this->error = "Error: " . $sql . PHP_EOL . $conn->error;
			return false;
		}

		function find($id) {
			global $conn;
			$condition = "user_id = $id";
			$bookings = $this->fetchAll($condition);
			return $bookings;
		}
	}
?>