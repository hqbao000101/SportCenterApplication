<?php  
	class PaymentRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$payments = array();
			$sql = "SELECT * FROM payment_method ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$payment = new Payment($row["id"], $row["name"], $row["description"]);
					$payments[] = $payment;
				}
			}
			return $payments;
		}

		function getAll() {
			return $this->fetchAll();
		}
	}
?>