<?php  
	class User {
		protected $id;
		protected $firstname;
		protected $lastname;
		protected $email;
		protected $password;
		protected $gender;
		protected $dateofbirth;
		protected $country;
		protected $role;

		function __construct($id, $firstname, $lastname, $email, $password, $gender, $dateofbirth, $country, $role){
			$this->id = $id;
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->email = $email;
			$this->password = $password;
			$this->gender = $gender;
			$this->dateofbirth = $dateofbirth;
			$this->country = $country;
			$this->role = $role;
		}

		function getId() {
			return $this->id;
		}

		function getFirstname() {
			return $this->firstname;
		}

		function getLastname() {
			return $this->lastname;
		}

		function getEmail() {
			return $this->email;
		}

		function getPassword() {
			return $this->password;
		}

		function getGender() {
			return $this->gender;
		}

		function getDateofbirth() {
			return $this->dateofbirth;
		}

		function getCountry() {
			return $this->country;
		}

		function getRole() {
			return $this->role;
		}

		function setFirstname($firstname) {
			$this->firstname = $firstname;
			return $this;
		}

		function setLastname($lastname) {
			$this->lastname = $lastname;
			return $this;
		}

		function setEmail($email) {
			$this->email = $email;
			return $this;
		}

		function setPassword($password) {
			$this->password = $password;
			return $this;
		}

		function setGender($gender) {
			$this->gender = $gender;
			return $this;
		}

		function setDateofbirth($date_of_birth) {
			$this->dateofbirth = $date_of_birth;
			return $this;
		}

		function setCountry($country) {
			$this->country = $country;
			return $this;
		}

		function setRole($role) {
			$this->role = $role;
			return $this;
		}
	}
?>