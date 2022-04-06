<?php  
	class UserRepository extends BaseRepository{
		protected function fetchAll($condition = null) {
			global $conn;
			$users = array();
			$sql = "SELECT * FROM user ";

			if ($condition) {
				$sql .= "WHERE $condition";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {
					$user = new User($row["id"], $row["firstname"], $row["lastname"], $row["email"], $row["password"], $row["gender"], $row["dateofbirth"], $row["country"], $row["role"]);
					$users[] = $user;
				}
			}
			return $users;
		}

		function getAll() {
			return $this->fetchAll();
		}

		function find($id) {
			global $conn;
			$condition = "id = $id";
			$users = $this->fetchAll($condition);
			$user = current($users);
			return $user;
		}

		function findEmail($email) {
			global $conn;
			$condition = "email = '$email'";
			$users = $this->fetchAll($condition);
			$user = current($users);
			return $user;
		}

		function save($data) {
			global $conn;
			$firstname = $data["firstname"];
			$lastname = $data["lastname"];
			$email = $data["email"];
			$password = $data["password"];
			$gender = $data["gender"];
			$dateofbirth = $data["dateofbirth"];
			$country = $data["country"];
			$role = $data["role"];

			$sql = "INSERT INTO user (firstname, lastname, email, password, gender, dateofbirth, country, role) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$dateofbirth', '$country', '$role')";

			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				return $last_id;
			}

			$this->error = "Error: " . $sql . PHP_EOL . $conn->error;
			return false;
		}

		function updateRole($role_id, $email){
			global $conn;

			$sql = "UPDATE user SET role = $role_id WHERE email = '$email'";

			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				return $last_id;
			}

			$this->error = "Error: " . $sql . PHP_EOL . $conn->error;
			return false;
		}

	}
?>