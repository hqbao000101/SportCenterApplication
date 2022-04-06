<?php  
	class RegisterController {
		function list() {
			include ABSPATH . "pages/register.php";
		}

		function register() {
			$firstname = $_POST['FirstName'];
			$lastname = $_POST['LastName'];
			$email = $_POST['Email'];
			$password = md5($_POST['Password']);
			$gender = $_POST['Gender'];
			$date_of_birth = $_POST['Year'] ."-". $_POST['Month'] ."-". $_POST['Day'];
			$country = $_POST['Country'];
			$role = 1;

			$data = array(
				"firstname" => $firstname,
				"lastname" => $lastname,
				"email" => $email,
				"password" => $password,
				"gender" => $gender,
				"dateofbirth" => $date_of_birth,
				"country" => $country,
				"role" => $role
			);


			// $_SESSION['email'] = $email;
			// $_SESSION['firstname'] = $firstname;
			// header("location: index.php?c=role");
			
			$userRepository = new UserRepository();
			if ($userRepository->save($data)) {
				$_SESSION['email'] = $email;
				$_SESSION['firstname'] = $firstname;
				header("location: index.php?c=role");
			} 
			else {
				echo $userRepository->getError();
			}
		}
	}
?>