<?php  
	class StatusRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$statuses = array();
			$sql = "SELECT * FROM booking_status ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$status = new Status($row["id"], $row["name"], $row["description"]);
					$statuses[] = $status;
				}
			}
			return $statuses;
		}

		function getAll() {
			return $this->fetchAll();
		}
	}
?>