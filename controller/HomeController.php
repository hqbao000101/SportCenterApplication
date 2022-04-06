<?php  
	class HomeController {
		function list() {
			include ABSPATH . "pages/home.php";
		}

		function setRole() {
			$userRepository = new UserRepository();
			$user = $userRepository->findEmail($_SESSION['email']);
			
			$_SESSION['id'] = $user->getId();
			$userRepository->updateRole($_GET['id'], $_SESSION['email']);

			header("location: index.php");
		}
	}
?>