<?php  
	class RoleRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$roles = array();
			$sql = "SELECT * FROM role ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$role = new Role($row["id"], $row["name"], $row["description"]);
					$roles[] = $role;
				}
			}
			return $roles;
		}

		function getAll() {
			return $this->fetchAll();
		}
	}
?>