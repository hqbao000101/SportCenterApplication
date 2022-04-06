<?php  
	class AuthController {
		function login() {
			$user_email = $_POST["user-email"];
			$user_pass = md5($_POST['user-password']);

			$userRepository = new UserRepository();
			$users = $userRepository->getAll();

			for ($i=0 ; $i <= count($users) - 1 ; $i++) { 
				if ($users[$i]->getEmail() == $user_email && 
					$users[$i]->getPassword() == $user_pass) {
						$_SESSION['id'] = $users[$i]->getId();
						$_SESSION['email'] = $user_email;
						$_SESSION['firstname'] = $users[$i]->getFirstname();
						$_SESSION["error"] = " ";
						header("location: index.php");
						exit;
					} 
			}

			$_SESSION["error"] = "*Wrong username or password. Please try again";
			header("location: index.php?c=login");

			// test case: 1) email:habo@gmail.com _ pass: 123
			// test case: 2) email:admin1@gmail.com _ pass: 123456
		}

		function logout() {
			session_destroy();
			header("location: index.php");
		}
	}
?>