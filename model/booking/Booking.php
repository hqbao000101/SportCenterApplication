<?php  
	class Booking {
		protected $id;
		protected $user_id;
		protected $username;
		protected $telephone_number;
		protected $selected_pitch;
		protected $booking_date;
		protected $start_time;
		protected $end_time;
		protected $price;
		protected $payment_method_id;
		protected $booking_status_id;

		function __construct($id, $user_id, $username, $telephone_number, $selected_pitch, $booking_date, $start_time, $end_time, $price, $payment_method_id, $booking_status_id){
			$this->id = $id;
			$this->user_id = $user_id;
			$this->username = $username;
			$this->telephone_number = $telephone_number;
			$this->selected_pitch = $selected_pitch;
			$this->booking_date = $booking_date;
			$this->start_time = $start_time;
			$this->end_time = $end_time;
			$this->price = $price;
			$this->payment_method_id = $payment_method_id;
			$this->booking_status_id = $booking_status_id;
		}

		function getId() {
			return $this->id;
		}

		function getUserId() {
			return $this->user_id;
		}

		function getUsername() {
			return $this->username;
		}

		function getMobile() {
			return $this->telephone_number;
		}

		function getSelectedPitch() {
			return $this->selected_pitch;
		}

		function getBookingDate() {
			return $this->booking_date;
		}

		function getStartTime() {
			return $this->start_time;
		}

		function getEndTime() {
			return $this->end_time;
		}

		function getPrice() {
			return $this->price;
		}

		function getPaymentMethodId() {
			return $this->payment_method_id;
		}

		function getBookingStatusId() {
			return $this->booking_status_id;
		}

		function setUserId($user_id) {
			$this->user_id = $user_id;
			return $this;
		}

		function setUsername($username) {
			$this->username = $username;
			return $this;
		}

		function setMobile($telephone_number) {
			$this->telephone_number = $telephone_number;
			return $this;
		}

		function setSelectedPitch($selected_pitch) {
			$this->selected_pitch = $selected_pitch;
			return $this;
		}

		function setBookingDate($booking_date) {
			$this->booking_date = $booking_date;
			return $this;
		}

		function setStartTime($start_time) {
			$this->start_time = $start_time;
			return $this;
		}

		function setEndTime($end_time) {
			$this->end_time = $end_time;
			return $this;
		}

		function setPrice($price) {
			$this->price = $price;
			return $this;
		}

		function setPaymentMethodId($payment_method_id) {
			$this->payment_method_id = $payment_method_id;
			return $this;
		}

		function setBookingStatusId($booking_status_id) {
			$this->booking_status_id = $booking_status_id;
			return $this;
		}
	}
?>