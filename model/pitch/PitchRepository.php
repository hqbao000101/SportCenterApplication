<?php  
	class PitchRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$pitches = array();
			$sql = "SELECT * FROM pitch ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$pitch = new Pitch($row["id"], $row["name"], $row["map"], $row["location"], $row["description"], $row["features"], $row["pitch_image"], $row["related_images"], $row["price"], $row["start_time"], $row["end_time"], $row["available_date"]);
					$pitches[] = $pitch;
				}
			}
			return $pitches;
		}

		function getAll() {
			return $this->fetchAll();
		}

		function findById($id) {
			global $conn;
			$condition = "id = $id";
			$pitches = $this->fetchAll($condition);
			$pitch = current($pitches);
			return $pitch;
		}
	}
?>